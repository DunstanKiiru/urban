<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            [
                'email' => 'admin@urbanroadssacco.co.ke',
            ],
            [
                'name' => 'Urban Roads SACCO Administrator',
                'password' => 'Sacco@2026!',
                'is_active' => true,
            ]
        );
    }
}
