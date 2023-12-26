<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';

    protected $with = ['produk'];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_sku', 'sku');
    }
}
