<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolesAndPermissionsController extends Controller
{
    /**
     * Display a listing of the permissions.
     *
     * @return Response
     */
    public function getPermissions() {
        $per_page = 10;
        $permissions = Permission::paginate($per_page);
        return view('admin.manager_data.permissions.index', ['permissions' => $permissions]);
    }

    /**
     * Display a listing of the roles.
     *
     * @return Response
     */
    public function getRoles() {
        $per_page = 10;
        $roles = Role::paginate($per_page);
        return view('admin.manager_data.roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new role.
     *
     * @return Response
     */
    public function createRole() {
        $permissions = Permission::all();
        return view('admin.manager_data.roles.create', ['permissions' => $permissions]);
    }

    /**
     * Store a newly created role in storage.
     *
     * @return Response
     */
    public function storeRole(Request $request) {
        $this->validate($request,
        [
            'name' => 'required|unique:roles',
            'permissions' => 'required'
        ],
        [
            'name.required' => 'Bạn cần nhập tên roles',
            'permissions.required' => 'Bạn cần chọn ít nhất 1 quyền'
        ]);

        app()['cache']->forget('spatie.permission.cache');
        $role = Role::create(['name' => $request->name]);
        $permissions = $request->input('permissions');
        foreach ($permissions as $item) {
            $role->givePermissionTo($item);
        }

        return redirect()->route('roles.index')->with('message','Bạn đã thêm role thành công');
    }

     /**
     * Display the specified role.
     *
     * @param  int  $id
     * @return Response
     */
    public function editRole($id) {
        $role = Role::find($id);
        $permissions = Permission::all();
        return view('admin.manager_data.roles.edit', ['permissions' => $permissions, 'role' => $role]);
    }

    /**
     * Update the specified role in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateRole(Request $request, $id) {
        $this->validate($request,
        [
            'name' => 'required|unique:roles,name,'.$id,
            'permissions' => 'required'
        ],
        [
            'name.required' => 'Bạn cần nhập tên roles',
            'permissions.required' => 'Bạn cần chọn ít nhất 1 quyền'
        ]);

        app()['cache']->forget('spatie.permission.cache');
        $role = Role::find($id);

        $p_all = Permission::all();
        foreach($p_all as $p) {
            $role->revokePermissionTo($p);
        }

        $permissions = $request->input('permissions');
        foreach ($permissions as $item) {
            $role->givePermissionTo($item);
        }

        return redirect()->route('roles.index')->with('message','Bạn đã update role thành công');
    }

    /**
     * Remove the specified role from storage.
     *
     * @param  int  $id
     * @return Response
     */
     public function destroyRole($id) {
        $role = Role::find($id);
        $role->delete();
        return $role->toJson();
    }
}
