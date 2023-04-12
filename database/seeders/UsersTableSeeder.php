<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate(
            [
                'email' => 'superadmin@yummycorp.com'
            ],
            [
                'first_name' => 'Superadmin',
                'last_name' => 'Yummy Corp',
                'email' => 'superadmin@yummycorp.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password')
            ]
        );

        if (!$user->hasRole('superadmin')) {
            $user->assignRole('superadmin');
        }
    }
}
