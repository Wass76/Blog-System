<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //  if (Role::findByName("admin")->count() < 0) {

        //  }
        //  if (Role::findByName("user")->count() < 0) {

        //     }
            // Role::create(["name"=> "admin"]);
            // Role::create(["name"=> "user"])  ;

            // $roles = ['User' , 'Admin' , 'Writer'];

            // foreach ($roles as $role) {
            // Role::create(['name' => $role]);
            // }
            $role = Role::create(["name"=> "Manager"]);


    }
}
