<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function loginp(Request $request){
        if(Auth::attempt(["email"=>$request->email, "password"=>$request->password])){
            return redirect()->route("admin.index");
        }
        else{
            return redirect()->route("login")->withErrors("Kullanıcı Hatası")->withInput();
        }
    }
    public function logoutp(Request $request){
        Auth::logout();
        return redirect()->route("index");
    }

    public function registerp(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->name);
        $user->save();
        return redirect()->route("login")->withErrors("Kullanıcı Kaydı Başarılı");
    }
}
