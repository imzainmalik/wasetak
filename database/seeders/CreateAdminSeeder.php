<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = Admin::create([
            'first_name' => 'Wasetak', 
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user = User::create([
            'username' => 'Wasetak_User', 
            'name' => 'Wasetak_User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
