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
        $data = [
            'username' => 'admin',
            'email' => 'admin@test',
            'password' => bcrypt('12345678'),
        ];

        DB::table('users')->insert($data);
    }
}
