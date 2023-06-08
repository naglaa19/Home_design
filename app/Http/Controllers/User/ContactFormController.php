<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\FAQ;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contact_form()
    {
        return view('user.contactForm' );
    }
    public function store(Request $request)
    {
        $rules = $this->getRules();
        $request->validate([
            
        ]);
  
        Contact::insert([
            'name' => $request->name,
            'email' =>  $request->email,
            'message' =>  $request->message,
        ]);
  
        return redirect()->route('/main')->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

    protected function getRules()
    {
        $rules=[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }
}
