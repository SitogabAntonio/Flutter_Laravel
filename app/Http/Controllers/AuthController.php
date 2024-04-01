<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login() {
        return view ('auth.login');
    }
    public function register() {
        return view ('auth.register');
    }

    public function auth_login(Request $request) {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {

                return redirect('/');

        }
        else{

            $user_id = Auth::user()->id;
            Auth::logout();

            $save = User::getsingle(Auth::user()->id);
            $save->remember_token = Str::random(40);
            $save->save();

            Auth::logout();

            mail::to($save->email)->send(new RegisterMail($save));
        }
    }

    public function create_user(Request $request) {

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'

        ]);



        $save = new User;
        $save->name= trim($request->name);
        $save->email= trim($request->email);
        $save->password = Hash::make($request->password);
        $save->save();

        return redirect('login')->with('success', "Akun anda berhasil dibuat :)");

    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }



}
