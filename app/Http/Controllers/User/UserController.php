<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logOut(){
        auth()->logout();
        return redirect('/');
    }
    // change password
    public function changePassword(){
        return view('user.change-password');
    }
    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        if (Hash::check($request->old_password, auth()->user()->password)) {
            auth()->user()->password = Hash::make($request->password);
            auth()->user()->save();
            return redirect()->back()->with('success', 'Mật khẩu đã được thay đổi');
        } else {
            return redirect()->back()->with('error', 'Mật khẩu cũ không đúng');
        }
    }
}
