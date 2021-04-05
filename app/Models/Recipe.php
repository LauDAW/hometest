<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'steps',
        'price',
        'time'
    ];

    protected $casts = [
        'steps' => 'array'
    ];

    public function creator() {
        return $this->belongsTo('App\Models\User');
    }
}
