<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\scanDesign;

class AppController extends Controller
{
    public function index()
    {
        $design = scanDesign::select()->paginate(PAGINATION_COUNTER);
        return view('user.application', compact('design'));
    }
}
