<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table='products';
    protected $fillable = ['name','alias','description','price','price_saleoff','content','image','published'];
    public $timestamps = true;
}
