<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use DataTables;

class RoleController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $title = __('role.index');
        return view('roles.index')->with(compact([
            'title'
        ]));
    }

    public function paginate()
    {
        $roles = Role::select();
        if(!Auth::user()->hasRole('superuser')) {
            $roles = Role::where('name', '<>', 'superuser');
        }

        return DataTables::of($roles)
        ->addColumn('actions', function ($roles) {
            return '
            <div class="btn-group" role="group">
            <a class="btn btn-sm text-dark" href="'. route('roles.edit', $roles->id). '">'. __('common.btn.edit') .'</i></a>
            <a class="btn btn-sm text-danger" href="'. route('roles.destroy', $roles->id). '" onclick="return confirm(\''. __('role.deleteAlert').'\');">'. __('common.btn.delete') .'</a>
            </div>
            ';
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
        $permissions = Permission::orderBy('name')->get()->pluck('name', 'id');
        $role = new Role;
        $rolePermissions = [];
        $title = __('role.create');

        return view('roles.create', compact([
            'permissions',
            'role',
            'rolePermissions',
            'title'
        ]));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permission' => 'required'
        ]);

        // check if same name role is already exists
        $exists = Role::where('name', $request->name)->exists();

        if ($exists) {
            return redirect()->back()->with('status-warning', __('role.storeWarning', ['name' => $request->name]))->withInput();
        }

        $role = new Role;
        $role->name = $request->name;
        $role->save();

        $permissions = $request->input('permission') ? $request->input('permission') : [];
        $role->givePermissionTo($permissions);

        return redirect()->back()->with('status-success', __('role.storeSuccess'));
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    // public function show($id)
    // {
    //     //
    // }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Role $role)
    {
        $permissions = Permission::orderBy('name')->get()->pluck('name', 'id');
        $title = __('role.edit');
        $rolePermissions = $role->permissions()->get();

        return view('roles.create', compact([
            'permissions', 
            'role', 
            'rolePermissions', 
            'title'
        ]));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id,
            'permission.*' => 'required'
        ]);

        $role->update($request->except('permission'));
        $permissions = $request->input('permission') ? $request->input('permission') : [];
        $role->syncPermissions($permissions);

        return redirect()->route('roles.index')->with('status-success', __('role.updateSuccess'));
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Role $role)
    {
        $exists = User::role($role->name)->exists();
        if ($exists) {
            return redirect()->back()->with('status-warning', __('role.deleteWarning', ['name' => $role->name]));
        }

        $permission = new Permission;
        $permission->removeRole($role);
        $role->delete();

        return redirect()->back()->with('status-success', __('role.deleteSuccess'));
    }
}
