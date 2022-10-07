<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserandUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'System Administrator']);
        Role::create(['name' => 'Midwife']);
        Role::create(['name' => 'Doctor']);

        User::create([
            'name' => 'System Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Midwife',
            'email' => 'midwife@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'Doctor',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 3,
        ]);
    }
}
