<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();        
        $user = new User();
        $user->dni = '34345443B';
        $user->firstname = 'User';
        $user->lastname = '..';
        $user->phone= '676807878';
        $user->email = 'user@example.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);
                
        $user = new User();
        $user->dni = '34345444X';
        $user->firstname = 'Admin';
        $user->lastname = '..';
        $user->phone= '676807878';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
