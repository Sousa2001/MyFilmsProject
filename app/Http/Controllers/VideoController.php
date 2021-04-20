<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Rol;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','rol:editor']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video= Video::all();
        return view('video.index',compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path=$request->file('route')->store('videos','public');
        $user_editor= Auth::user()->id;
        Video::create([
                        'title'=>$request->title,
                        'cont'=>$request->cont,
                        'desc'=>$request->desc,
                        'route'=>$path,
                        'user'=>$user_editor
            ]);
        return redirect()->route('video.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */


   public function show($id)
   {
    $comment= Comment::where('video',$id);
    $comment->delete();
    $video=Video::where('id',$id);
    $video->delete();
    return redirect()->route('video.index');
}

   public function newvideo()
    {
    return view('video.newvideo');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */

   /* public function edit(video $video)
    {
        //
    }*/

    public function edit($id)
    {
        $video=Video::find($id);
    return view('video.edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */


  /*  public function update(Request $request, video $video)
    {
        //
    }*/

    public function update(Request $request, video $video)
    {
        $video=Video::where('id',$video->id);
        $video->update(['title'=>$request->title,
        'desc'=>$request->desc,
        'cont'=>$request->cont,
        'route'=>$request->route,
        'user'=>$request->user,
        ]);

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        dd("videodestroy");
        $video=Video::where('id',$id);
        $video->delete();
    return view('video.index',compact('video'));
    }*/
}
