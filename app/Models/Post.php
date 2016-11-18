<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table    = "articles";
    protected $guarded  = [];

    public function comment()
    {
    	return $this->hasMany('App\Models\Comment', 'article_id');
    }
}
