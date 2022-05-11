<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('Auth');
    // }

    public function ContactForm(Request $request)
    {
      $contacts = new ContactForm;
      $contacts->name = $request->name;
      $contacts->email = $request->email;
      $contacts->subject = $request->subject;
      $contacts->message = $request->message;
      $contacts->save();

    return redirect()->back()->with('success', 'Message is sent succesful');
    }

    public function ContactMessages()
    { 
      $contacts = ContactForm::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function DeleteMessage($id)
    {
      $contacts = ContactForm::find($id);
      $contacts->delete();
      return redirect()->back()->with('success','Contact Message is deleted successfully');
    }
}
