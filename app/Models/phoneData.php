<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phoneData extends Model
{
    use HasFactory;
    protected $table = 'phone';
    protected $fillable = [
        'name',
        'phone'
];
}
