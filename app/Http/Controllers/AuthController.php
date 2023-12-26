<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use App\Models\user;
use Hash;
use Mail;
use Str;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function create_user(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->remember_token = Str::random(40);
        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save));

        return redirect('login')->with('success',"Your Account Successfully Register");

    }

    public function verify($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            $user->email_verified_at	 = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(40);

            $user->save();

            return redirect('login')->with('success',"Your Account Successfully Verified");
        }
        else
        {
            abort(404);
        }
    }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember) ? true: false;

        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password], $remember))
        {
            return redirect('panel/dashboard');
        }
        else
        {
            return redirect()->back()->with('error',"please enter currect email and password");

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
