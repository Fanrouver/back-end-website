<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Events\EmailEvent;
use App\Models\User;
use App\Traits\GeneralTrait;
use DataTables;
use App\Classes\MediaProcess;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = __('users.index');
        return view('users.index', compact('title'));
    }

    public function paginate()
    {
        $users = User::select([
            'users.*',
            'roles.name as role_name'
        ])
        ->leftJoin('model_has_roles', 'model_has_roles.model_id', 'users.id')
        ->leftJoin('roles', 'model_has_roles.role_id', 'roles.id')
        ->where('model_has_roles.model_type', 'App\\Models\User');

        if(!Auth::user()->hasRole('superuser')) {
            $users->where('roles.name', '<>', 'superuser');
        }
        
        return DataTables::of($users)
        ->addColumn('actions', function ($users) {
            $actions = '<div class="btn-group" role="group">';
            $actions.= '<a class="btn btn-sm text-dark" href="'. route('users.edit', $users->id). '">'. __('common.btn.edit') .'</i></a>';
            if(Auth::user()->id != $users->id) {
                $actions.= '<a class="btn btn-sm text-danger" href="'. route('users.destroy', $users->id). '" onclick="return confirm(\''. __('users.deleteAlert').'\');">'. __('common.btn.delete') .'</a>';
            }
            $actions.= '</div>';

            return $actions;
        })
        ->rawColumns(['actions'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'name');
        if(!Auth::user()->hasRole('superuser')) {
            $roles = Role::where('name', '<>', 'superuser')->get()->pluck('name', 'name');
        }

        $displayRoles = [];
        foreach ($roles as $key => $role) {
            $displayRoles[$role] = $role;
        }

        $roles = $displayRoles;
        $title = __('users.create');
        $user = new User;

        return view('users.create', compact([
            'roles',
            'title',
            'user'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $tempPassword = str_random(8);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $this->emptyStringToNull($request->last_name);
        $user->email = $request->email;
        $user->password = Hash::make($tempPassword);
        $user->save();
        
        if(!$user) {
            return redirect()->back()->with('status-danger', __('users.storeFailed'))->withInput();
        }
        
        // assign role
        try {
            $role = Role::where('name', $request->role)->firstOrFail();
            $user->assignRole($role->name);

            $collection = User::$collectionValue;
            $mediaProcess = new MediaProcess;
            $mediaProcess->uploadProcess($request, 'image', $user, $collection);
        }
        catch (ModelNotFoundException $e) {
            $createRole = Role::create([
                'name' => $request->role
            ]);

            $role = Role::where('name', $request->role)->first();
            $user->assignRole($role->name);
        }

        // send registration Email
        $params = [
            'password' => $tempPassword,
        ];

        // keep send email contains of temp password
        event(new EmailEvent($user, 'registration', $params));
        // send email verification
        event(new Registered($user));

        return redirect()->back()->with('status-success', __('users.storeSuccess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get()->pluck('name', 'name');
        if(!Auth::user()->hasRole('superuser')) {
            $roles = Role::where('name', '<>', 'superuser')->get()->pluck('name', 'name');
        }

        $displayRoles = [];
        foreach ($roles as $key => $role) {
            $displayRoles[$role] = $role;
        }

        $roles = $displayRoles;
        $title = __('users.edit');

        return view('users.create', compact([
            'roles',
            'title',
            'user'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $user->first_name = $request->first_name;
        $user->last_name = $this->emptyStringToNull($request->last_name);
        $user->email = $request->email;
        $user->save();

        $roles = $request->input('role') ? $request->input('role') : [];

        $user->syncRoles($roles);

        $collection = User::$collectionValue;
        $mediaProcess = new MediaProcess;
        if($request->has('imageSrc') && $request->hasFile('image')) {
            // delete existing image
            $user->media()->whereJsonContains('custom_properties->type', 'image')->first()->delete($collection);
        }
        $mediaProcess->uploadProcess($request, 'image', $user, $collection);

        return redirect()->route('users.index')->with('status-success', __('users.updateSuccess'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Delete Media
        $mediaRemove = new MediaProcess;
        $medias = $user->media()->get();
        if(count($medias) > 0) {
            $mediaRemove->removeProcess($medias);
        }

        $user->syncRoles([]);
        $user->delete();
        
        return redirect()->back()->with('status-success', __('users.deleteSuccess'));
    }
}
