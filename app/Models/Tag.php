<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title'
    ];

    public function books() {
        return $this->belongsToMany(Book::class, 'book_reader');
    }
}
