<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Post();
        $post->title = 'NETFLIX HAS ALMOST 4X AS MANY STREAMING SUBSCRIBERS AS COMCAST HAS CABLE SUBSCRIBERS';
        $post->url = 'http://exstreamist.com/netflix-has-almost-4x-as-many-streaming-subscribers-as-comcast-has-cable-subscribers/';
        $post->board = 'technology';
        $post->created_by = 3;
        $post->save();

        $post1 = new \App\Models\Post();
        $post1->title = 'On the wall of my recently renovated university\'s bathroom';
        $post->board = 'anime';
        $post1->photo = 'y3mb7j8yz5vy.jpg';
        $post1->created_by = 2;
        $post1->save();


        $post2 = new \App\Models\Post();
        $post2->title = 'Some post';
        $post->board = 'anime';
        $post2->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nisl tempus, pharetra magna ac, faucibus lorem. Phasellus placerat convallis dui, ac luctus metus posuere a. Phasellus molestie consequat massa vel imperdiet. Curabitur dignissim nunc libero, eu placerat nisl porta quis. Etiam est lectus, consequat et tincidunt sit amet, fringilla ut nulla. Pellentesque non augue commodo, condimentum diam luctus, posuere lorem. Aliquam a elementum urna. Sed venenatis dui ac dapibus lobortis. Nunc sit amet urna quis arcu aliquet dignissim et ut enim. Fusce ac sagittis risus. Proin iaculis placerat eros sit amet vestibulum. Donec lobortis velit elementum ipsum sagittis cursus.';
        $post2->created_by = 2;
        $post2->save();


        $post3 = new \App\Models\Post();
        $post3->title = 'Steins Gate wallpaper';
        $post3->photo = '1492994302597.jpg';
        $post->board = 'anime wallpapers';
        $post3->created_by = 5;
        $post3->save();


        $post4 = new \App\Models\Post();
        $post4->title = 'Boolean Logic';
        $post4->photo = 'p4pw9z22p8vy.png';
        $post->board = 'programming';
        $post4->created_by = 2;
        $post4->save();


        $post5 = new \App\Models\Post();
        $post5->title = 'I colorize black and white TV shows, and I just finished this scene from I Love Lucy (1953)';
        $post5->url = 'https://youtu.be/IbL-VUZmL30';
        $post5->content = 'OHHH WOWWW';
        $post->board = 'tv and film';
        $post5->created_by = 6;
        $post5->save();


        $post6 = new \App\Models\Post();
        $post6->title = 'The rare stroke of genius at Activision.';
        $post6->url = 'https://i.imgflip.com/1o20g7.jpg';
        $post6->content = 'Example content';
        $post->board = 'gaming general';
        $post6->created_by = 7;
        $post6->save();


        $post7 = new \App\Models\Post();
        $post7->title = 'Firefighting Drones are Saving Lives as Next Advancement in Public Safety Technology';
        $post7->url = 'https://www.newsledge.com/drones-public-safety-technology/';
        $post7->content = 'Example Content';
        $post->board = 'technology';
        $post7->created_by = 7;
        $post7->save();


        $post8 = new \App\Models\Post();
        $post8->title = 'My Car Makes Noise: A library of car noises which can be used to diagnose car problems';
        $post8->url = 'http://mycarmakesnoise.com/';
        $post8->content = 'Example Content';
        $post->board = 'auto';
        $post8->created_by = 9;
        $post8->save();


        $post9 = new \App\Models\Post();
        $post9->title = 'The Office- Toby Snaps';
        $post9->url = 'https://youtu.be/7s3D8f1x5V8';
        $post9->content = 'Example Content';
        $post->board = 'random';
        $post9->created_by = 1;
        $post9->save();

    }
}