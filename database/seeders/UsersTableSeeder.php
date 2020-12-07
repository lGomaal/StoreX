<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name' , 'admin')->first();
        $authorRole = Role::where('name' , 'author')->first();
        $userRole = Role::where('name' , 'user')->first();

        $admin = User::create([
            'name' => 'AdminUser',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);

        $author = User::create([
            'name' => 'AuthorUser',
            'email' => 'author@author.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'GeniricUser',
            'email' => 'user@user.com',
            'password' => Hash::make('password')
        ]);
        
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
