<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole=Role::where('role','Admin')->first();
        $userRole= Role::where('role','User')->first();

        $adminUser=new User();
        $adminUser->first_name="Ahmad Yousuf";
        $adminUser->last_name="Samandar";
        $adminUser->email="admin@gmail.com";
        $adminUser->password=bcrypt('123456');
        $adminUser->save();
        $adminUser->roles()->attach($adminRole);

        $adminUser=new User();
        $adminUser->first_name="Jamshid";
        $adminUser->last_name="Elmi";
        $adminUser->email="jamshid@gmail.com";
        $adminUser->password=bcrypt('123456');
        $adminUser->save();
        $adminUser->roles()->attach($adminRole);
//
//        $normalUser=new User();
//        $normalUser->first_name="Norma";
//        $normalUser->last_name="User";
//        $normalUser->email="user@email.com";
//        $normalUser->phone_number="0093794332020";
//        $normalUser->password=bcrypt('123456');
//        $normalUser->image=('assets/cms/img/theme/team-1-800x800.jpg');
//        $normalUser->save();
//        $normalUser->roles()->attach($userRole);



    }
}
