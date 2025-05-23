<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Fetch posts for this user
        $posts = posts::where('user_id', $user->id)
            ->with('user')
            ->latest()
            ->get();

        return view('pages.profile', compact('posts'));
    }

}
