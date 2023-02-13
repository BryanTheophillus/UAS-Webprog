<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rule;
// {{-- Bryan Theophillus - 2401953966 --}}
class AuthenticateController extends Controller
{
    public function AddAccount(Request $request)
    {

        $rules = [
            'FirstName' => 'required|string|max:25|alpha',
            'LastName' => 'required|string|max:25|alpha',
            'Email' => 'required|email|unique:accounts',
            'Gender' => 'required',
            'Role' => 'required',
            'password' => 'required|min:8|max:25|alpha_num|confirmed',
            'password_confirmation' => 'required|min:8|max:25',
            'DisplayPicture' => 'required|image',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $account = new Account();
        $account->role_id = $request->Role;
        $account->gender_id = $request->Gender;
        $account->first_name = $request->FirstName;
        $account->last_name = $request->LastName;
        $account->email = $request->Email;
        $account->password = bcrypt($request->password);

        $file = $request->file('DisplayPicture');
        $fileName = time() . $request->FirstName . $request->LastName;
        Storage::putFileAs('public/images', $file, $fileName);
        $account->display_picture_link = "images/" . $fileName;

        $account->save();

        return redirect('/Login');
    }

    public function Auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if ($request->remember) {
                Cookie::queue('Email_cookie', $request->email, 300);
                Cookie::queue('Password_cookie', $request->password, 300);
            } else {
                Cookie::queue(Cookie::forget('Email_cookie'));
                Cookie::queue(Cookie::forget('Password_cookie'));
            }

            $request->session()->regenerate();

            return redirect()->intended('/Home');
        }else {
            $request->session()->flash('error', 'Wrong Email/Password. Please Check Again');

            return back()->with('login Error');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view("Logout");
    }

    public function Update(Request $request)
    {
        $Account = Account::find(Auth::user()->id);
        $request->validate([
            'FirstName' => 'required|string|max:25|alpha',
            'LastName' => 'required|string|max:25|alpha',
            'Email' => 'required|email', Rule::unique('accounts')->ignore($Account->email),
            'gender' => 'required',
            'Role' => 'required',
            'password' => 'required|min:8|max:25|alpha_num|confirmed',
            'password_confirmation' => 'required|min:8|max:25',
            'DisplayPicture' => 'required|image',
        ]);

        if (isset($request->FirstName)) {
            $Account->first_name = $request->FirstName;
        }

        if (isset($request->LastName)) {
            $Account->last_name = $request->LastName;
        }

        if (isset($request->Email)) {
            $Account->email = $request->Email;
        }

        if (isset($request->gender)) {
            $Account->gender_id = $request->gender;
        }

        if (isset($request->Role)) {
            $Account->role_id = $request->Role;
        }

        if (isset($request->password)) {
            $Account->password = bcrypt($request->password);
        }

        $file = $request->file('DisplayPicture');
        $default = $Account->display_picture_link;
        if (isset($file)) {
            $fileName = time() .'_'. $request->FirstName . '_'.$request->LastName .'.'.$file->getClientOriginalExtension();
            if($Account->display_picture_link = 'images/user.png' ) {
                Storage::putFileAs('public/images', $file, $fileName);
                $Account->display_picture_link = 'images/'.$fileName;
            } else {
                Storage::delete('public/'.$Account->display_picture_link);
                Storage::putFileAs('public/images', $file, $fileName);
                $Account->display_picture_link = 'images/'.$fileName;
            }
            $Account->save();
            return redirect('/UpdateSucces');
        }



    }
    public function Success() {
        return view('UpdateSucces');
    }
}
