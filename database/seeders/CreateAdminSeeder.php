<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

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
            'password' => bcrypt('12345678')
        ]);
    }
}
