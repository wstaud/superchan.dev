<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new \App\Models\Comments();
        $comment->post_id = 4;
        $comment->comment = 'Wow, so cool.';
        $comment->created_by = 1;
        $comment->save();

        $comment1 = new \App\Models\Comments();
        $comment1->post_id = 4;
        $comment1->comment = 'Pffttt, lame';
        $comment1->created_by = 2;
        $comment1->save();

        $comment2 = new \App\Models\Comments();
        $comment2->post_id = 4;
        $comment2->comment = 'DOOOOOGGGGGGG';
        $comment2->created_by = 2;
        $comment2->save();

        $comment3 = new \App\Models\Comments();
        $comment3->post_id = 4;
        $comment3->comment = 'What a stupidly, over draw, long comment for no reason other than to fill as much damn space as possible... who would have ever throught that such a comment was needed. It\'s absurd, it\'s over the top. Why in the world would someone create such a thing... disgusting.';
        $comment3->created_by = 1;
        $comment3->save();

    }
}