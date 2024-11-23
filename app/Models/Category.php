<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "parentid",
        "order",
        "name",
        "slug",
        'description',
        'title_seo',
        'description_seo'
    ];

    public function category_tovars() {
        return $this->belongsToMany(Product::class);
    }
}
