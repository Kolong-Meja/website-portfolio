<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use App\Models\Content;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'content_id', 'name'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contents() {
        return $this->belongsTo(Content::class, 'content_id');
    }
}
