<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $user_editor = User::where('rol','4')->first();
        $video= new Video();
        $video->title = 'Title1';
        $video->cont= 'Content1';
        $video->desc='Description1';
        $video->route='Route1';
        $video->user=1;
        $video->save();
       // $video->users()->attach($user_editor);

    }
}
