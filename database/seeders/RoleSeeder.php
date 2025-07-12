<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin', 'guard_name' => 'web']);
        Role::create(['name' => 'conductor', 'guard_name' => 'web']);
        Role::create(['name' => 'cliente', 'guard_name' => 'web']);
           $admin = User::firstOrCreate(
            ['email' => 'tobon055@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('3207312439Yt@'), // 🔐 IMPORTANTE usar Hash
            ]
        );
        $admin->assignRole('admin');
    }
  
}
