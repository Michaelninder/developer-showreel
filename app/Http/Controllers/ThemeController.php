<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ThemeController extends Controller
{
    public function switchTheme(Request $request)
    {
        $request->validate([
            'theme' => ['required', Rule::in(['light', 'dark', 'system'])],
        ]);

        Session::put('theme', $request->theme);

        return response()->json(['message' => 'Theme updated successfully.']);
    }
}