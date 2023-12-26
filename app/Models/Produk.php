<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $primaryKey = 'sku';

    protected $guarded = [];
}
