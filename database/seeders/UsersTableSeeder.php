<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
use DB;
use App\Models\User;
use App\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole=Role::where('name','admin')->first();
        $userRole=Role::where('name','user')->first();
        

        $admin =User::create([
            'name'=>'Admin User',
            'email'=>'admin@test.com',
            'password'=>Hash::make('password')
        ]);

        $user =User::create([
            'name'=>'Generic User',
            'email'=>'user@test.com',
            'password'=>Hash::make('password')
        ]);


        // Attach the user 
        $admin ->roles()->attach($adminRole);
        $user ->roles()->attach($userRole);
    }
}
