<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "佐藤",
                'email' => "impl@test.com",
                'password' => "aaaaaaaa",
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "田中",
                'email' => "admin@test.com",
                'password' => "aaaaaaaa",
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "高橋",
                'email' => "user@test.com",
                'password' => "aaaaaaaa",
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "山口",
                'email' => "user1@test.com",
                'password' => "aaaaaaaa",
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "伊藤",
                'email' => "user2@test.com",
                'password' => "aaaaaaaa",
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "鈴木",
                'email' => "user3@test.com",
                'password' => "aaaaaaaa",
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "大谷",
                'email' => "user4@test.com",
                'password' => "aaaaaaaa",
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
