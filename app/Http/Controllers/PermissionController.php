<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DataTables;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title =__('permission.index');
        return view('permissions.index')->with(compact([
            'title'
        ]));
    }
    
    public function paginate()
    {
        $permissions = Permission::select();
        
        return DataTables::of($permissions)
        ->addColumn('actions', function ($permissions) {
            return '
            <div class="btn-group" role="group">
            <a class="btn btn-sm text-dark" href="'. route('permissions.edit', $permissions->id). '">'. __('common.btn.edit') .'</i></a>
            <a class="btn btn-sm text-danger" href="'. route('permissions.destroy', $permissions->id). '" onclick="return confirm(\''. __('permission.deleteAlert').'\');">'. __('common.btn.delete') .'</a>
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
        $permission = new Permission;
        $title = __('permission.create');

        return view('permissions.create')->with(compact([
            'permission',
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
            'name' => 'required|unique:permissions,name'
        ]);

        // check if same name role is already exists
        $exists = Permission::where('name', $request->name)->exists();

        if ($exists) {
            return redirect()->back()->with('status-warning', __('permission.storeWarning', ['name' => $request->name]))->withInput();
        }

        $permission = new Permission;
        $permission->name = $request->name;
        $permission->save();

        return redirect()->back()->with('status-success', __('permission.storeSuccess'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $title = __('permission.edit');

        return view('permissions.create')->with(compact([
            'permission',
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
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$permission->id
        ]);

        $permission->name = $request->name;
        $permission->save();

        return redirect()->route('permissions.index')->with('status-success', __('permission.updateSuccess'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $exists = $permission->roles()->where('permission_id', $permission->id)->exists();
        if($exists) {
            return redirect()->back()->with('status-warning', __('permission.deleteWarning', ['name' => $permission->name]));
        }

        $permission->delete();
        return redirect()->back()->with('status-success', __('permission.deleteSuccess'));
    }
}
