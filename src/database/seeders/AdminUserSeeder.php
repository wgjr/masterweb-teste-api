<?php

namespace Database\Seeders;

use App\Models\Sales;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::select('email')->where('email', 'exemple1@comprador.com')->doesntExist()) {
            User::create([
                'name' => 'Comprador 1',
                'email' => 'exemple1@comprador.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10)
            ]);
        }
    }
}
