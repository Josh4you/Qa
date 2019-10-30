<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
