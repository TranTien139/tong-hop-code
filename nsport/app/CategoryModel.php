<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
     protected $table='categorys';
    protected $fillable = ['name','alias','parent_id'];
    public $timestamps = true;
}
