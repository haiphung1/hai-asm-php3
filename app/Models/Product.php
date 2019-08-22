<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'sale_percent',
        'stocks',
        'is_active'
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'product_id', 'id');
    }
}
