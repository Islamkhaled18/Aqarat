<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = \App\User::create([

            'first_name'=> 'Super',
            'last_name'=> 'admin',
            'email'=> 'admin@gmail.comn',
            'password'=> bcrypt('123456789'),

        ]);//end of create


        $user->attachRole('super_admin');

    }//end of run

}//end of seeder
