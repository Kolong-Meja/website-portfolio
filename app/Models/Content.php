<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'header', 'description', 
        'image', 'email', 'mobile'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
