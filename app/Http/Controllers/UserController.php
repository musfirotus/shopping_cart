<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function getSignin()
    {
        return view('user.signin');
    }

    public function getProfile()
    {
        return view('user.profile');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users|min:8',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        return redirect()->route('product.index');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }
}
