<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Orchid\Screen\AsSource;

class ProductTexture extends Model
{
    use HasFactory;
    // use AsSource;


    public $fillable = [
        'product_id',
        'img',
        'title'
    ];
}
