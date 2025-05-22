<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\posts;

class ProfilePostController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Fetch posts for this user
        $posts = posts::where('user_id', $user->id)->with('user')->latest()->get();

        return view('pages.profile', compact('posts'));
    }
}
