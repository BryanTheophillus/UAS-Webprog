<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
// {{-- Bryan Theophillus - 2401953966 --}}
class UserController extends Controller
{
    public function Index(){
        return view('index');
    }

    public function Login(){
        return view('login');
    }

    public function Register(){
        $roles = Role::all();
        return view('Register',compact('roles'));
    }

    public function Profile(){
        $account = Auth::user();
        $genders = Gender::all();
        return view('Profile',compact('account','genders'));
    }

}
