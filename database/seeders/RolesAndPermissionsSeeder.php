<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat permissions
        Permission::create(['name' => 'create books']);
        Permission::create(['name' => 'edit books']);
        Permission::create(['name' => 'delete books']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'borrow books']);
        Permission::create(['name' => 'return books']);
        Permission::create(['name' => 'view borrowed books']);
        Permission::create(['name' => 'create fines']);
        Permission::create(['name' => 'view fines']);

        // Membuat roles
        $adminRole = Role::create(['name' => 'admin']);
        $librarianRole = Role::create(['name' => 'librarian']);
        $studentRole = Role::create(['name' => 'student']);

        // Memberikan permissions ke role
        $adminRole->givePermissionTo(Permission::all());
        $librarianRole->givePermissionTo([
            'create books',
            'edit books',
            'delete books',
            'borrow books',
            'return books',
            'view borrowed books'
        ]);
        $studentRole->givePermissionTo('view borrowed books');
    }
}
