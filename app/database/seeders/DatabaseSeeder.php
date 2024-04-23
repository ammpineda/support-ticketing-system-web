<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Adds 1 staff member
        DB::table('staffs')->insert([
            'email' => 'staff@example.com',
            'password' => Hash::make('12345'),
            'first_name' => 'Joshua',
            'last_name' => 'Chua',
            'profile_pic_address' => 'default_dp.jpg',    
        ]);
    }
    
}
