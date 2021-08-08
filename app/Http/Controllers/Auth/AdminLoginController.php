<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['Logout']]);
    }

    public function showloginform()
    {
        return view('auth.admin.login');
    }

    public function login(Request $request)
    {
        // validate the form  data
        $this->validate($request, [
            'email' =>'required',
            'password' =>'required|min:8'
        ]);

        // attempt to log in user
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successfull, then redirect to their intended location
            return redirect('/adminpanel');
        } else {
            // if unsuccessfull, then redirect to their login form
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
    public function Logout()
    {
        Auth::guard('admin')->Logout();
        return redirect('/');
    }
}
