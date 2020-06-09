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
        $user->firstname = 'Juan Antonio';
        $user->lastname = 'Perez Garcia';
        $user->phone= '666777888';
        $user->email = 'juan@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '75249889J';
        $user->firstname = 'Marta';
        $user->lastname = 'Ortiz Nuñez';
        $user->phone= '789765654';
        $user->email = 'marta@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '75240664M';
        $user->firstname = 'Juan';
        $user->lastname = 'Perez Nuñez';
        $user->phone= '789765654';
        $user->email = 'elplan_be@hotmail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '89779765B';
        $user->firstname = 'Enrique';
        $user->lastname = 'Lopez Lopez';
        $user->phone= '654567654';
        $user->email = 'enri@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '64535662B';
        $user->firstname = 'Lola';
        $user->lastname = 'Guitierrez Sanz';
        $user->phone= '655667778';
        $user->email = 'lola@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '76778775W';
        $user->firstname = 'Nerea';
        $user->lastname = 'Ross Priego';
        $user->phone= '622334332';
        $user->email = 'nerea@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '77788866L';
        $user->firstname = 'Antonio';
        $user->lastname = 'Garcia Martinez';
        $user->phone= '633442112';
        $user->email = 'antonio@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '35656543B';
        $user->firstname = 'Pablo';
        $user->lastname = 'Martin Jimenez';
        $user->phone= '672343244';
        $user->email = 'pablo@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '23456543G';
        $user->firstname = 'Ricardo';
        $user->lastname = 'Montero Cortes';
        $user->phone= '612332144';
        $user->email = 'ric@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '33223344N';
        $user->firstname = 'Esther';
        $user->lastname = 'Molina Segura';
        $user->phone= '650909843';
        $user->email = 'esther@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '66837362Z';
        $user->firstname = 'Paola';
        $user->lastname = 'Ricci Moss';
        $user->phone= '620303484';
        $user->email = 'paola@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '655456654P';
        $user->firstname = 'Ruben';
        $user->lastname = 'Noriega Plat';
        $user->phone= '612454332';
        $user->email = 'rub@mail.com';
        $user->password = bcrypt('pass');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->dni = '32345443B';
        $user->firstname = 'Francisco';
        $user->lastname = 'Martin Martin';
        $user->phone= '690998877';
        $user->email = 'fran@mail.com';
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
