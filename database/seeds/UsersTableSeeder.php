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
            'name' => 'Lion King',
            'email' => '******',
            'password' => bcrypt('******')
        ]);

        DB::table('users')->insert([
            'name' => 'Makgabo EMathekga',
            'email' => '****',
            'password' => bcrypt('****')
        ]);

        DB::table('users')->insert([
            'name' => 'GudLuk Mme',
            'email' => '******',
            'password' => bcrypt('******')
        ]);

    }
}
