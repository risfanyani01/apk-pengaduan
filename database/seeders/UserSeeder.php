<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat sample user
        $user = new User();
        $user->email = 'admin@gmail.com';
        $user->name = 'Admin';
        $user->password = Hash::make('123');
        $user->role = 'admin';
        $user->save();

        $manager = new User();
        $manager->email = 'petugas@gmail.com';
        $manager->name = 'Petugas';
        $manager->password = Hash::make('123');
        $manager->role = 'petugas';
        $manager->save();    
    }
}
