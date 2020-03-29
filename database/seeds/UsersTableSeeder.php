<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Klik Tech',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'status' => true
        ]);
    }
}
