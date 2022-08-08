<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'post_id' => 1,
                'body' => 'comment_1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 1,
                'body' => 'comment_2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2,
                'body' => 'comment_3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 3,
                'body' => 'comment_4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($comments as $comment)
        {
            DB::table('comments')->insert([$comment]);
        }
    }
}
