<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'nik' => '1234567890123456',
            'email' => 'admin@gmail.com',
            'telepon' => '089516982907',
            'password' => Hash::make('09876543'),
            'remember_token' => Str::random(10),
            'idRole' => 1,
    ]);
    }
}
