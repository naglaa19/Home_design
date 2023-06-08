<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;

class DesignAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = Design::select()->paginate(PAGINATION_COUNTER);
        return view('admin.design.index',compact('designs'));
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // return '2';
        $design=Design::findOrFail($id)->delete();
        return redirect()->route('design/index')->with('success', __('messages.Deleted'));
    }
}
