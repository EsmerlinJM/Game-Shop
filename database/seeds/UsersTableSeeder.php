<?php

use Illuminate\Support\Facades\Hash;
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
            'name' => 'Administrador',
            'email' => 'admin@hotmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'verified' => 1,
            'email_token' => base64_encode('admin@hotmail.com')
        ]);

        User::create([
            'name' => 'cliente',
            'email' => 'cliente@hotmail.com',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'verified' => 1,
            'email_token' => base64_encode('cliente@hotmail.com')
        ]);
    }
}
