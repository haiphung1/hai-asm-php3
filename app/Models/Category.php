<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $category = 'categories';
    protected $fillable = [
        'name',
        'parent_id'
    ];
    public function products()
    {
        return $this->hasMany('App\Models\Product','category_id','id');
    }
    public function childs()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id', 'id');
    }
    public function parents()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
