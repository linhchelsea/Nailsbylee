<?php

namespace App\Http\Controllers\BackEnd;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('backend.contact.index',compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        $user = User::find($contact->idUser);
        if ($user != null){
            $contact->user = $user->name;
        }
        return view('backend.contact.show',compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        $request->session()->flash('success','Success!');
        return redirect()->back();
    }
    public function replyContact(Request $request){
        $id = $request->id;
        $type = $request->type;
        $contact = Contact::findOrFail($id);
        $contact->reply = 1;
        $contact->idUser = Auth::user()->id;
        $contact->save();
        return $type;
    }
}
