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
        DB::table('users')->insert([
          'username'    => str_random(10),
          'password'    => str_random(10),
          'email'       => str_random(10).'@gmail.com',
          'first_name'  => str_random(10),
          'last_name'   => str_random(10),
          'password'    => bcrypt('secret'),
        ]);
    }
}
