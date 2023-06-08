<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $design = Design::select()->paginate(PAGINATION_COUNTER);
        return view('admin.design.index',compact('design'));
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 2;
        $design=Design::findOrFail($id)->delete();
        return 4;
        // return redirect()->route('design/index')->with('success', __('messages.Deleted'));
    }
}
