<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Vinícius Porfirio',
                'username' => 'msflix',
                'email' => 'tcc@viniciusporfirio.com.br',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('Ourense01/*-')
            ],
            [
                'name' => 'vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendedortcc@viniciusporfirio.com.br',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('Ourense01/*-')
            ],
            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'clientetcc@viniciusporfirio.com.br',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('Ourense01/*-')
            ]
        ]);
    }
}
