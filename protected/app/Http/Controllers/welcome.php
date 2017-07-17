<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Post; 

class Welcome extends Controller
{
	public function index() {
		// Game::limit(30)->offset(30)->get();
		$posts = Post::where('status', 'setujui')->take(8)->get();
	    return view('welcome', ['posts' => $posts]);
	}

	public function read($slug)
    {
        $tampilkan = Post::where('slug_judul', $slug)->first();
        return view('front.read',['data' => $tampilkan]);
    }

    public function shirt()
    {
        return view('home');
    }
}
