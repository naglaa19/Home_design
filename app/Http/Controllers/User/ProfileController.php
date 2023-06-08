<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Design;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index($id)
    {
        $user = User::select()->find($id);
        $design = Design::select()->where('user_id',$id)->get();
        $designs = Design::select()->where('user_id',$id)->get()->count();
        $comments = Comment::select()->where('user_id',$id)->get()->count();
        return view('user.profile.index',compact('design','user','designs','comments'));
    }

    public function create()
    {
        return view('user.profile.upload');
    }

    public function store(Request $request)
    {
        $file_name = $this->getImage($request);
        Design::create([
             'name'=>$request->name,
             'image'=>$file_name,
             'caption'=> $request->caption,
             'user_id'=>Auth::user()->id,
        ]);

        return redirect()->route('profile/index',Auth::user()->id)->with('success', __('messages.Added'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.profile.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $file_name = $this->getImage($request);
        User::find($id)->update([
            'image'=>$file_name,
            'name'=>$request->name,
             'email'=>$request->email,
             'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('profile/index',Auth::user()->id)->with('success', __('messages.Updated'));
    }

    protected function getImage($request)
    {
        if($request->image==null)
        {
            $file_name=$request->old_image;
        }
        else
        {
            $image = $request->file('image');
            $file_extention = $image->getClientOriginalName();
            $file_name = \Str::random(20) . $file_extention;
            $path = 'images/designs';
            $image->move($path, $file_name);
        }
        return $file_name;
    }
}
