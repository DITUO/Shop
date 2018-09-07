<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'image', 'on_sale', 
        'rating', 'sold_count', 'review_count', 'price'
    ];
    //$casts 是字段自动转换，在这里就是把on_sale转成布尔类型存入数据库
    protected $casts = [
    'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    // 与商品SKU关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return '/public/'.$this->attributes['image'];
    }
}
