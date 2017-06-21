<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mirror extends Model
{
    protected $table = 'mirrors';

    protected $fillable = ['city'];
}
