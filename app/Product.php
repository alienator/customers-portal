<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'sku';
    public $incrementing = false;
}
