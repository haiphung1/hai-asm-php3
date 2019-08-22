<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $comment = 'comments';
    protected $fillable =[
        'user_id',
        'product_id',
        'content'
    ];
    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
