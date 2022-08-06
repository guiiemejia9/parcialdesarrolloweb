<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'Books';
    public $timestamps = false;
    protected $fillable = [
        'id', 'name', 'edition', 'year', 'author', 'Editorial_id'
    ];

    protected $primaryKey = 'id';
}

