<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    "name" => "Admin Lab Sipil",
                    "email" => "laboratoriumsipil.unsoed@gmail.com",
                    "password" => Hash::make('123456'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Hery Awan Susanto",
                    "email" => "hery.awan@unsoed.ac.id",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Dani Nugroho Saputro",
                    "email" => "dani.nugroho@unsoed.ac.id",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Umigawati",
                    "email" => "umigawati@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Ghiffara Hasna Royanisa",
                    "email" => "ghiffara.hasna@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Ferdiono",
                    "email" => "ferdiono@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Wildan Agus Setiadi",
                    "email" => "wildan.agus@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "M.T. Fajriyanto",
                    "email" => "mt.fajriyanto@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Kuswanto",
                    "email" => "kuswanto@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Amrizal Hafiz",
                    "email" => "amrizal.hafiz@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Wiwit Laras Wiranto",
                    "email" => "wiwit.laras@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Yulianto",
                    "email" => "yulianto@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "name" => "Slamet",
                    "email" => "slamet@example.com",
                    "password" => Hash::make('password'),
                    "email_verified_at" => now(),
                    "created_at" => now(),
                    "updated_at" => now()
                ],
            ]
        );
    }
}
