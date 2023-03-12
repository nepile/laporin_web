<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Ghibran',
            'username' => 'ghibran',
            'email' => 'gibran@gmail.com',
            'password' => Hash::make('123gibran456'),
            'telp' => '082373914639',
            'email_verified_at' => date('Y-m-d', strtotime('now')),
            'role' => 'masyarakat',
        ]);
    }
}
