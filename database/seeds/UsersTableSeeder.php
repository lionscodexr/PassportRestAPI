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
            'email' => 'lionscodexr@gmail',
            'password' => bcrypt('abcd4321')
        ]);

        DB::table('users')->insert([
            'name' => 'Makgabo EMathekga',
            'email' => 'makgabo.emathekga@gmail',
            'password' => bcrypt('abcd4321')
        ]);

        DB::table('users')->insert([
            'name' => 'GudLuk Mme',
            'email' => 'gudlukmme@gmail',
            'password' => bcrypt('abcd4321')
        ]);

    }
}
