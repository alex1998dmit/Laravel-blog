<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =  App\User::create([

           'name' => 'alexander',

            'email' => 'alex@gmail.com',

            'password' => bcrypt('password'),

            'admin' => 1

        ]);

        App\Profile::create([

            'user_id' => $user->id,

            'avatar' => 'upload/avatar/1.jpg',

            'about' => 'lorem ipsim into derem',

            'facebook' => 'facebook.com',

            'youtube' => 'youtube.com'

        ]);
    }
}
