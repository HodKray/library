<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReader extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[
        'book_id',
        'reader_id',
        'start_date',
        'end_date',
    ];


}
