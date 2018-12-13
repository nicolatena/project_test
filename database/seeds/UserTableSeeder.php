<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{
    
/**
     * Run the database seeds.
     *
     * @return void
     */
public function run(){
        \App\User::insert([
            [
                'name' => 'onphpid',
                'email' => 'onphpid@gmail.com',
                'password' => \Hash::make('onphpid')
            ],
            [
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => \Hash::make('john')
            ]
        ]);
}

}