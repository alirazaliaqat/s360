<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $table = 'tbl_products';
    public $timestamps= false;

    function getColor()
    {
       return $this->hasMany('App\Models\Color');
    }
}
