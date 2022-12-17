<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use App\Models\Content;

class HomeController extends Controller
{
    public function index() {
        try {
            $content = Content::join('users', 'users.id', "=", 'contents.user_id')
            ->select(
                'contents.id', 'users.name', 'users.email', 'users.mobile', 
                'users.twitter', 'users.instagram', 'users.github',
                'contents.header', 'contents.description_indonesia', 
                'contents.description_english'
                )->where('contents.id', '=', 1)->first();

            $slogan = "I am ready to help create and develop your website";
            $elisabeth_cookies_project_link = 'https://github.com/Kolong-Meja/Website-Elizabeth-Cookies';

            $data_compact = array(
                'user_name' => $content->name,
                'user_email' => $content->email,
                'user_mobile' => $content->mobile,
                'user_twitter_account' => $content->twitter,
                'user_instagram_account' => $content->instagram,
                'user_github_account' => $content->github,
                'project_link' => $elisabeth_cookies_project_link,
                'content_header' => $content->header,
                'content_description_indonesia' => $content->description_indonesia,
                'content_description_english' => $content->description_english,
                'slogan' => $slogan,
            );

            $selected_id = 1;
            if ($content->id != $selected_id) {
                return abort(404);    
            }
            return view('home', $data_compact);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
