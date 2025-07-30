<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function switchTheme(Request $request)
    {
        $theme = Session::get('theme', 'dark'); // Default to dark
        $newTheme = $theme === 'dark' ? 'light' : 'dark';
        Session::put('theme', $newTheme);

        return back();
    }
}
