<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'will';
        $user->email = 'william.staud@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user1 = new \App\User();
        $user1->name = 'user1';
        $user1->email = 'user1@gmail.com';
        $user1->password = Hash::make('betterpassword');
        $user1->save();

        $user2 = new \App\User();
        $user2->name = 'user2';
        $user2->email = 'user2@gmail.com';
        $user2->password = Hash::make('longerpassword');
        $user2->save();

        $user3 = new \App\User();
        $user3->name = 'user3';
        $user3->email = 'user3@gmail.com';
        $user3->password = Hash::make('strongerpassword');
        $user3->save();

        $user4 = new \App\User();
        $user4->name = 'user4';
        $user4->email = 'user4@gmail.com';
        $user4->password = Hash::make('weakerpassword');
        $user4->save();

        $user5 = new \App\User();
        $user5->name = 'user5';
        $user5->email = 'user5@gmail.com';
        $user5->password = Hash::make('somepassword');
        $user5->save();

        $user6 = new \App\User();
        $user6->name = 'user6';
        $user6->email = 'user6@gmail.com';
        $user6->password = Hash::make('Goodpassword1');
        $user6->save();

        $user7 = new \App\User();
        $user7->name = 'user7@gmail.com';
        $user7->password = Hash::make('BestPassword@121!');
        $user7->save();

        $user8 = new \App\User();
        $user8->name = 'user8';
        $user8->email = 'user8@gmail.com';
        $user8->password = Hash::make('hmmmm');
        $user8->save();

        $user9 = new \App\User();
        $user9->name = 'user9';
        $user9->email = 'user9@gmail.com';
        $user9->password = Hash::make('what is a password');
        $user9->save();
    }
}