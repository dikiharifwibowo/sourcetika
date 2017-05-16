<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;


class PostController extends Controller
{
    public function index() {
    	return view('admin.post');
    }

    public function save(Request $request) {
    	//$request->nim;
    	//dd($request->all()); //sama ky print
    	$this->validate($request,[
    		'kategori_id' => 'required',
    		'judul' => 'required|unique:posts',
    		'isi' => 'required',
    		'cover' => 'required'
    	]);


    	$dicari = Post::where('id',$request->id)->first();
    	$member = new Post();
    	$member->user_id = Auth::id();
    	$member->kategori_id = $request->kategori_id;

    	$image = $request->file('cover');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('theme/user/img/' . $filename);
        Image::make($image->getRealPath())->resize(200, 200)->save($path);
        $member->cover = $filename;

    	$member->judul = $request->posts;
    	$member->isi = $request->isi;


    	if ($member->save()) {
    		return redirect('post')->with('success','Pendaftaran berhasil'); //sesion
    	} //jika true maka di bawah tdk di jalankan

    	return redirect('post')->with('error','Terjadi Kesalahan');
    }

}
