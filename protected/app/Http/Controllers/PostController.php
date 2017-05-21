<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Image;
use Illuminate\Support\Str; //manggil str utk details artikel

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

        //upload gambar (belum di resize)
        $file       = $request->file('cover');
        $fileName   = $file->getClientOriginalName();
        $request->file('cover')->move("img/post/", $fileName);

        $member->cover = $fileName;

    	$member->judul = $request->judul;
        $member->slug_judul = Str::slug($request->judul);
    	$member->isi = $request->isi;

        if (Auth::user()->level == 'admin') {
            $member->status = 'setujui';
        }

    	if ($member->save()) {
    		return redirect('post')->with('success','Artikel Berhasil di buat, Tunggu Reiew dari Sourcetika.com'); //sesion
    	} //jika true maka di bawah tdk di jalankan

    	return redirect('post')->with('error','Terjadi Kesalahan');
    }

    public function tech($tech) {
        $hasil = Post::where('judul', 'like', "%$tech%")->paginate(8); //or where atau and 

        //member::where('nim','15.01.3482')->first() ada juga pake get();
        // return view('front.tech',['tech' => $hasil, 'cari' => $tech]);
        return view('front.tech',['tech' => $hasil]);
    }
}
