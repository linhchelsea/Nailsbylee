<?php

namespace App\Http\Controllers\FrontEnd;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\IndexImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ParentCat;
use App\Information;
class ContactController extends Controller
{
    public function index()
    {
        $information = Information::findOrFail(1);
        return view('frontend.contact', compact('information'));
    }


    public function store(ContactRequest $request){
        $name = $request->Name;
        $email = $request->Email;
        $phone = $request->Phone;
        $message = $request->Message;
        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->message = $message;
        $contact->reply = 0;
        $contact->idUser = 0;
        $contact->save();
        $request->session()->flash('success','Thank you for your contact!');
        return redirect()->back();
    }
}
