<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
class ImageController extends Controller
{
    public function index()
    {
        $images = Image::select()->paginate(PAGINATION_COUNTER);
        return view('admin.image.index',compact('images'));
    }

    public function create()
    {
        $category =Category::select()->get();
        return view('admin.image.create',compact('category'));
    }

    public function store(Request $request)
    {
        $rules = $this->getRules();
        $file_name = $this->getImage($request);
        Image::create([
             'name'=>$request->name,
             'image'=>$file_name,
             'discreption'=>$request->discreption,
             'category_id'=>$request->category_id,
        ]);
        return redirect()->route('Image/index')->with('success', __('messages.Added'));
    }

    public function edit($id)
    {
        $image=Image::find($id);
        $category=Category::find($image->category_id);
        $cat=Category::select('id','name')->get()->except($category->id);
        return view('admin.image.edit',compact('image','category','cat'));
    }

    public function update(Request $request, $id)
    {
        $rules = $this->getRules();
        $file_name = $this->getImage($request);
        Image::find($id)->update([
             'name'=>$request->name,
             'image'=>$file_name,
             'discreption'=>$request->discreption,
             'category_id'=>$request->category_id,
        ]);
        return redirect()->route('Image/index')->with('success', __('messages.Updated'));
    }

    public function destroy($id)
    {
        $image=Image::find($id)->delete();
        return redirect()->route('Image/index')->with('success', __('messages.Deleted'));
    }

    protected function getRules()
    {
        $rules=[
            'name'=>['required','Max:255'],
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'discreption'=>['required','Max:255'],
        ];
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
            $path = 'images/images';
            $image->move($path, $file_name);
        }
        return $file_name;
    }
}
