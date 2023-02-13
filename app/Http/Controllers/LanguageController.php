<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

// {{-- Bryan Theophillus - 2401953966 --}}
class LanguageController extends Controller
{
    public function localization($language) {
        session()->put('mySession', $language);
        return redirect()->back();
    }
}
