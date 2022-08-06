<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'Editorial';
    public $timestamps = true;
    protected $fillable = [
        'id_editorial', 'name',
    ];

    protected $primaryKey = 'id';
}
