<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Content;

use App\Models\User;

use App\Models\Image;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $main_content = DB::table('contents')
        ->join('users', 'users.id', '=', 'contents.user_id')
        ->select(
            'contents.id', 'users.name', 'users.email', 'users.mobile',
            'contents.header', 'contents.description_indonesia', 
            'contents.description_english'
            )->where('contents.id', '=', 1)->first();

        $data_compact = array(
            'user_name' => $main_content->name,
            'user_email' => $main_content->email,
            'user_mobile' => $main_content->mobile,
            'content_header' => $main_content->header,
            'content_description_indonesia' => $main_content->description_indonesia,
            'content_description_english' => $main_content->description_english,
        );

        if ($main_content->id == 1) {
            return view('home', $data_compact);
        }

        return abort(404);
    }
}
