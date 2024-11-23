<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'sku',
        'title',
        'slug',
        'img',
        'description',
        'price',
        'old_price',
        'sales_count',
        'hit',
        'new',
        'volume',
        'short_description',
        'color_name',
        'color_img',
        'series',
        'seo_title',
        'seo_description'
    ];

    protected $casts = [
        'advantages' => 'array',
        'props' => 'array',
    ];

    public function scopeFilter(Builder $builder, QueryFilter $filter) {
        return $filter->apply($builder);
    }

    public function tovar_trademark()
    {
        return $this->hasOne(Trademark::class);
    }

    public function tovar_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function tovar_texture()
    {
        return $this->hasMany(ProductTexture::class);
    }

    public function category_tovars() {
        return $this->belongsToMany(Category::class);
    }
}
