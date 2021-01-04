<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(["name" => "todo-list"]);
        Permission::create(["name" => "todo-add"]);
        Permission::create(["name" => "todo-delete"]);
        Permission::create(["name" => "todo-mark-complete"]);

        $superAdmin = Role::create(["name" => "Super Admin"]);
        $user = Role::create(["name" => "User"]);

        $user->givePermissionTo(['todo-list', 'todo-add', 'todo-delete', 'todo-mark-complete']);

        $user = User::create([
            "name" => "Atiq",
            "email" => "Atiq@gmail.com",
            "password" => Hash::make("qwer1234"),
        ]);
        $user->assignRole($superAdmin);
    }
}
