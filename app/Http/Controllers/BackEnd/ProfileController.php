<?php

namespace App\Http\Controllers\BackEnd;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function profile(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        return view('backend.users.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
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
            $request->session()->flash('success', 'Profile was updated successfully!');
        }else{
            $request->session()->flash('fail', 'Profile was updated successfully!');
        }
        return redirect()->route('profile');
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
