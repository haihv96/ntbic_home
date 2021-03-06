<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
	{
    	// Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'Edit users']);
        Permission::create(['name' => 'Delete users']);
        Permission::create(['name' => 'Create users']);
        Permission::create(['name' => 'View users']);

        Permission::create(['name' => 'Edit roles']);
        Permission::create(['name' => 'Delete roles']);
        Permission::create(['name' => 'Create roles']);
        Permission::create(['name' => 'View roles']);

        Permission::create(['name' => 'Edit permissions']);
        Permission::create(['name' => 'Delete permissions']);
        Permission::create(['name' => 'Create permissions']);
        Permission::create(['name' => 'View permissions']);
        
        Permission::create(['name' => 'Edit news']);
        Permission::create(['name' => 'Delete news']);
        Permission::create(['name' => 'Create news']);
        Permission::create(['name' => 'View news']);

        Permission::create(['name' => 'Edit partners']);
        Permission::create(['name' => 'Delete partners']);
        Permission::create(['name' => 'Create partners']);
        Permission::create(['name' => 'View partners']);

        Permission::create(['name' => 'Edit events']);
        Permission::create(['name' => 'Delete events']);
        Permission::create(['name' => 'Create events']);
        Permission::create(['name' => 'View events']);

        Permission::create(['name' => 'Access admin dashboard']);
        Permission::create(['name' => 'Download file']);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'moderator']);
        $role->givePermissionTo('Edit news');
        $role->givePermissionTo('Delete news');
        $role->givePermissionTo('Create news');
        $role->givePermissionTo('View news');
        $role->givePermissionTo('Access admin dashboard');
        $role->givePermissionTo('Download file');

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('Edit news');
        $role->givePermissionTo('Delete news');
        $role->givePermissionTo('Create news');
        $role->givePermissionTo('View news');
        $role->givePermissionTo('Edit users');
        $role->givePermissionTo('Delete users');
        $role->givePermissionTo('Create users');
        $role->givePermissionTo('View users');
        $role->givePermissionTo('Edit roles');
        $role->givePermissionTo('Delete roles');
        $role->givePermissionTo('Create roles');
        $role->givePermissionTo('View roles');
        $role->givePermissionTo('Edit permissions');
        $role->givePermissionTo('Delete permissions');
        $role->givePermissionTo('Create permissions');
        $role->givePermissionTo('View permissions');
        $role->givePermissionTo('Access admin dashboard');
        $role->givePermissionTo('Download file');

        $admin = User::find(1);
        $admin->assignRole('admin');        
    }
}