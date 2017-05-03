<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function user() {
        return $this->belongsTo('App\User', 'created_by');
    }
}
