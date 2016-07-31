<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
      protected $table='sliders';
    protected $fillable = ['name','image','published'];
    public $timestamps = false;
}
