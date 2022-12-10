<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        try {
            $main_content = DB::table('contents')
            ->join('users', 'users.id', '=', 'contents.user_id')
            ->select(
                'contents.id', 'users.name', 'users.email', 'users.mobile', 
                'users.twitter', 'users.instagram', 'users.github',
                'contents.header', 'contents.description_indonesia', 
                'contents.description_english'
                )->where('contents.id', '=', 1)->first();

            $elisabeth_cookies_project_link = 'https://github.com/Kolong-Meja/Website-Elizabeth-Cookies';

            $data_compact = array(
                'user_name' => $main_content->name,
                'user_email' => $main_content->email,
                'user_mobile' => $main_content->mobile,
                'user_twitter_account' => $main_content->twitter,
                'user_instagram_account' => $main_content->instagram,
                'user_github_account' => $main_content->github,
                'project_link' => $elisabeth_cookies_project_link,
                'content_header' => $main_content->header,
                'content_description_indonesia' => $main_content->description_indonesia,
                'content_description_english' => $main_content->description_english,
            );

            $selected_id = 1;
            if ($main_content->id != $selected_id) {
                return abort(404);    
            }
            return view('home', $data_compact);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
