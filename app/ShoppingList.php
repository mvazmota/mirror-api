<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    protected $table = 'lists';

    protected $fillable = ['title', 'description', 'quantity', 'list_id'];

    public function products()
    {
        return $this->hasMany('App\Product', 'list_id');
    }
}
