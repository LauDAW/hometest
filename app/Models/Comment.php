<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'recipe_id',
        'user_id',
        'comment_id',
        'comment'
    ];

    public function poster() {
        return $this->belongsTo('App\Models\User');
    }

    public function reply() {
        return $this->belongsTo('App\Models\Comment');
    }

    public function replies() {
        return $this->hasMany('App\Models\Comment');
    }
}
