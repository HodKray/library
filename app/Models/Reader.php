<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
        'date_of_birth',
    ];

    public function books() {
        return $this->belongsToMany(Book::class, 'book_reader');
    }
}
