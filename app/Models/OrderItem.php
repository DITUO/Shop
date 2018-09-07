<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * 商品表中存放订单中包含的商品信息，多个商品信息可能属于同一个订单
     */
    protected $fillable = ['amount', 'price', 'rating', 'review', 'reviewed_at'];
    protected $dates = ['reviewed_at'];
    public $timestamps = false;

    /**
     * 商品属于哪个产品
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }

    /**
     * 商品的sku
     */
    public function productSku(){
        return $this->belongsTo(ProductSku::class);
    }

    /**
     * 商品属于哪个订单
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
