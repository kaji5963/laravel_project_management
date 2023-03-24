<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'name' => '新規',
            ],
            [
                'name' => '計画中',
            ],
            [
                'name' => '提案中',
            ],
            [
                'name' => '受注',
            ],
            [
                'name' => '失注',
            ],
            [
                'name' => '確認中',
            ],
            [
                'name' => '納品',
            ],
        ]);
    }
}
