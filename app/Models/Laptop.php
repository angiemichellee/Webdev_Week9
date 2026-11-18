<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'prosessor',
        'ram',
    ];
    /** @use HasFactory<\Database\Factories\LaptopFactory> */
    use HasFactory;
}
