<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    function __construct()
    {
    }

    public function show()
    {
        $videos= Video::all();
        $comments=Comment::all();
        return view('welcome',compact('videos','comments'));
    }

}
