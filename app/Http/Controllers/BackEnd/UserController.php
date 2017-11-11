<?php

namespace App\Http\Controllers\BackEnd;

use App\Contact;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('IsAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('isAdmin','=',false)
            ->orderBy('id','DESC')
            ->paginate(10);
        return view('backend.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->isAdmin = 0;
        //kiem tra email co bi trong khong
        $user_checkEmail = User::where('email','=',$user->email)->first();
        if($user_checkEmail != null){
            $request->session()->flash('fail', 'Email was used by another user');
            return redirect()->back();
        }
        if($user->isAdmin > 1 || $user->isAdmin < 0){
            $request->session()->flash('fail', 'Position is invalid!');
            return redirect()->back();
        }
        $user->password = bcrypt($request->password);
        $user->avatar = 'avatar.png';
        if($user->save()) {
            $request->session()->flash('success', 'New user was created successfully!');
        }else{
            $request->session()->flash('fail', 'New user was created unsuccessfully!');
        }
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('backend.users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);

        //Lay thong tin tu form
        $user->name = $request->fullname;
        if($request->password != null){
            if($request->password != $request->password_confirmation){
                $request->session()->flash('fail','Password and Password Confirm are not the same!');
                return redirect()->back();
            }
            $user->password = bcrypt($request->password);
        }
        if($request->file('avatar') != null){
            $checkFile = self::CheckFileUpload($request->file('image')->getClientOriginalName());
            if(!$checkFile){
                $request->session()->flash('fail','Image format is invalid (jpg,jpeg,png,gif)!');
                return redirect()->back();
            }
            if($user->avatar != 'avatar.png'){
                //Xoa anh cu~
                File::delete('storage/avatars/'.$user->avatar);
            }
            //Up anh moi
            $image = $request->file('avatar')->store('public/avatars');
            $arr_filename = explode("/",$image);
            $filename = end($arr_filename);
        }else{
            $filename = $user->avatar;
        }

        $user->avatar = $filename;

        if($user->save()) {
            $request->session()->flash('success', 'User was updated successfully!');
        }else{
            $request->session()->flash('fail', 'User was updated successfully!');
        }
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if($id === 1){
            $request->session()->flash('fail', 'Can not delete Administrator!');
            return redirect()->route('users.index');
        }
        $user = User::findOrFail($id);

        //chuyen reply contact sang cho admin
        $contacts = Contact::where('idUser','=',$id)->get();
        if (count($contacts) > 0){
            foreach ($contacts as $contact){
                $contact->idUser = Auth::user()->id;
                $contact->save();
            }
        }
        if($user->avatar != 'avatar.png'){
            //Xoa anh trong folder
            File::delete('storage/avatars/'.$user->avatar);
        }
        //Xoa record trong database
        if($user->delete()){
            $request->session()->flash('success', 'User was deleted successfully!');
        }else{
            $request->session()->flash('success', 'User was deleted unsuccessfully!');
        }
        return redirect()->route('users.index');
    }
    public static function CheckFileUpload($filename){
        $arrFilename = explode('.',$filename);
        $format = $arrFilename[count($arrFilename)-1];
        if ($format == 'png' || $format == 'jpg' ||$format == 'jpeg' ||$format == 'gif' ){
            return true;
        }
        return false;
    }
}
