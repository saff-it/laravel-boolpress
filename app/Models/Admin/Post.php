<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'post_content',
        'post_date',
        'post_img',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
}
