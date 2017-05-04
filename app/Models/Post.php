<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function user() {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function comment() {
        return $this->hasMany('App\Models\Comments', 'post_id');
    }
}
