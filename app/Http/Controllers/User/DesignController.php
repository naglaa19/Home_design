<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Design;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignController extends Controller
{
    public function index()
    {
        $design=Design::select()->get();
        return view('user.designs',compact('design'));
    }

    public function show($id)
    {
        $user_id = User::select()->get();
        $design = Design::select()->find($id);
        $comment = Comment::select()->where('design_id',$id)->orWhere('user_id',$user_id)->get();
        $comments_count = Comment::select()->where('design_id',$id)->get()->count();
        return view('user.comments',compact('design','comments_count','comment'));
    }

    public function destroy($id)
    {
        $design=Design::findOrFail($id)->delete();
        return redirect()->route('profile/index',Auth::user()->id);
    }
}
