<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'description',
        'published_at',
    ];

    public function borrowing()
    {
        return $this->hasMany(Borrowing::class);
    }
}
