<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'author',
        'published_at',
    ];

    protected $dates = ['published_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
