<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    function __construct()
    {
    }

    public function show()
    {
        $videos= Video::all();
        return view('welcome',compact('videos'));
    }

}
