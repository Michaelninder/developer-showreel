<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function lander(Request $request)
    {
        $githubStats = null;
        $type = $request->input('type');

        try {
            $response = Http::get('https://api.github.com/users/michaelninder');
            if ($response->successful()) {
                $githubStats = $response->json();
            }
        } catch (\Exception $e) {
            \Log::error('GitHub API call failed: ' . $e->getMessage());
        }

        return view('pages.lander', compact('githubStats', 'type'));
    }
}