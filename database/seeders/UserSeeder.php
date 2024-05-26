<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'name' => 'pemohon',
                'nik' => '1234567890123456',
                'email' => 'pemohon@gmail.com',
                'telepon' => '089516982907',
                'password' => '09876543',
                'create_at' => now(),
                'update_at' => now(),
        ]);
    }
}
