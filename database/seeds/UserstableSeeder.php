<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'raineb',
            'email' => 'bannisterraine@gmail.com',
            'password' => Hash::make('test')
        ]);
    }
}
