<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
          // Assign admin role
          $adminRole = Role::where('name', 'admin')->first();
          $user = User::firstOrCreate(
              ['email' => 'madhu@gmail.com'],
              ['name' => 'madhu', 'password' => bcrypt('password')]
          );
          $user->role = $adminRole->id;
          $user->save();
    }
}
