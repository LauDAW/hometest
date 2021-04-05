<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valoration extends Model
{
    protected $fillable = [
        'user_id',
        'recipe_id',
        'valoration'
    ];

    public function recipe() {
        return $this->belongsTo('App\Models\Recipe');
    }
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
