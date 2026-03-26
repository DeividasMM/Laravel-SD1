<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $employeeRole = Role::where('name', 'employee')->first();
        $clientRole = Role::where('name', 'client')->first();

        $admin = User::create([
            'name' => 'Admin',
            'surname' => 'Adminaitis',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->roles()->attach($adminRole->id);

        $employee = User::create([
            'name' => 'Jonas',
            'surname' => 'Jonaitis',
            'email' => 'employee@example.com',
            'password' => Hash::make('password'),
        ]);
        $employee->roles()->attach($employeeRole->id);

        $client = User::create([
            'name' => 'Petras',
            'surname' => 'Petraitis',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
        ]);
        $client->roles()->attach($clientRole->id);
    }
}
