<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;

use App\Models\Content;

use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $owner = User::select('id')->where('id', 1)->first();
        $content = Content::select('id')->where('id', 1)->first();

        Image::create([
            'user_id' => $owner->id,
            'content_id' => $content->id,
            'name' => 'picture_1.jpg'
        ]);
    }
}
