<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'waleed altam',
            'email' => 'waleed@admin.com',
            'password' => Hash::make('waleed@admin.com'),
            'role'=>User::ROLE_ADMIN
           
        ]);
    }
}
