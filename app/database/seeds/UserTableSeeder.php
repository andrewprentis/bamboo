<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        \User::create([
        		'email' => 'emp1@example.co.uk',
        		'userable_id' => 1,
        		'userable_type' => 'employees',
        		'password' => \Hash::make('somepw#1'),
        		'remember_token' => null,
        		'active' => 1
		]);
        
        \User::create([
        		'email' => 'emp2@example.co.uk',
        		'userable_id' => 2,
        		'userable_type' => 'employees',
        		'password' => \Hash::make('somepw#1'),
        		'remember_token' => null,
        		'active' => 1
        ]);
        
        \User::create([
        		'email' => 'cust1@example.co.uk',
        		'userable_id' => 1,
        		'userable_type' => 'customers',
        		'password' => \Hash::make('somepw#1'),
        		'remember_token' => null,
        		'active' => 1
        ]);
    }

}
