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
        'user_id',
    ];

    protected $dates = ['published_at'];

    protected $casts = ['user_id' => 'int', 'published_at' => 'datetime'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
