<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\post; 

class welcome extends Controller
{
	public function index() {
		// Game::limit(30)->offset(30)->get();
		$posts = post::take(2)->get();
	    return view('welcome', ['posts' => $posts]);
	}
}
