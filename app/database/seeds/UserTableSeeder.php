<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username' 	=> 'emfrigo',
			'password'	=> Hash::make('12345'),
			'email'		=> 'emfrigo@hotmail.com'
		]);
	}

}