<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Florian Wartner',
                'email' => 'florian@wartner.io',
                'is_admin' => true,
                'email_verified_at' => now(),
                'password' => Hash::make('password')
            ]
        ];

        collect($users)->each(function ($user) {
            \App\Models\User::create($user);
        });
    }
}
