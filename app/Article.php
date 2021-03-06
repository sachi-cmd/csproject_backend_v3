<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    // 1 to 1 polymorphic relation
    public function post() 
    {
        return $this->morphOne('App\Post', 'postable');
    }
}
