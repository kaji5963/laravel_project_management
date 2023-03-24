<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'モバイルアプリ開発',
                'description' => 'flutterを用いてのクロスプラットフォーム開発',
                'customer' => '株式会社フラッター',
                'skills' => 'flutter,dart',
                'assignees' => '佐藤, 田中',
                'status' => '新規',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'バックエンド開発',
                'description' => 'Laravelでのバックエンドapi開発',
                'customer' => '株式会社ララベル',
                'skills' =>  'Laravel',
                'assignees' => '高橋',
                'status' => '提案中',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'フロントエンド開発',
                'description' => 'Reactでのフロントエンド開発',
                'customer' => '株式会社リアクト',
                'skills' =>  'React',
                'assignees' => '山口, 大谷',
                'status' => '計画中',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'バックエンド開発',
                'description' => 'Pythonでのバックエンド開発',
                'customer' => '株式会社パイソン',
                'skills' =>  'Python',
                'assignees' => '伊藤, 鈴木',
                'status' => '新規',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
