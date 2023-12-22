<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "egiLaravelA",
            'email' => 'egiLaravelA@egiLaravelA',
            'password' => Hash::make('12345678'),
            // 'level' => 'admin',
		]);

        DB::table('users')->insert([
            'name' => "Administrator",
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            // 'level' => 'admin',
        ]);
    }
}