<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageDetailModel extends Model
{
    protected $table='image_details';
    protected $fillable = ['imagedetail','product_id'];
    public $timestamps = true;
}
