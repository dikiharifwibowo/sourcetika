<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{	
	//relasi ke table kategori
	public function kategori() {

    	return $this->belongsTo(Kategori::class);
    	//hasOne
    	//hasMany
    	//HASmANYtHROUGJ
    	//belongsTo
    	//belingsMany
    }
    
    public function user() {
    	return $this->belongsTo(User::class);
    }

}
