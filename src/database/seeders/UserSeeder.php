<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** create super admin */
        $superAdmin = User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
        $superAdmin->assignRole('Super Admin');
        /** create admin */
        $admin = User::create([
            'username' => 'test1',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('test1')
        ]);
        $admin->assignRole('Admin');
        /** create user */
        $admin = User::create([
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test')
        ]);
        $admin->assignRole('User');
    }
}
