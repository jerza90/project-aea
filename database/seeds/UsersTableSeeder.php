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
        $admin = \App\User::create([
            'name'     => 'admin admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        $admin = \App\User::create([
            'name'     => 'jer azhar',
            'email'    => 'jer_90@yahoo.com',
            'password' => bcrypt('admin'),
        ]);

        //Faker timeline

    }
}
