<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    function __construct()
    {

    }

    public function index()
    {
        $user= User::find(Auth::User()->id);
        return view('profile.editprofile',compact('user'));
    }

    public function show($name)
    {
     $user=User::where('name',$name);
     $user->delete();
     return redirect()->route('show');
 }
 public function edit($id)
 {
     $user=User::find($id);
 return view('profile.editprofile',compact('user'));
 }

 public function update(Request $request, user $user)
 {
     $user=Auth::user();/*User::where('id',$user->id);*/
     /*$user->update([*/
    $user->name=$request->name;
     $user->email=$request->email;
     if ($request->password != null){
        $user->password = Hash::make($request->password);
     }

     /*]);*/
     $user->save();
     return redirect()->route('home');
 }

}
