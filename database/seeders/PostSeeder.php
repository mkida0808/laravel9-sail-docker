<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Title A',
                'body' => 'Body A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Title B',
                'body' => 'Body B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Title C',
                'body' => 'Body C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Title D',
                'body' => 'Body D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Title E',
                'body' => 'Body E',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($posts as $post)
        {
            DB::table('posts')->insert([$post]);
        }
    }
}
