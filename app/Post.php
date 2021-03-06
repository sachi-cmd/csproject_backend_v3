<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    // 1 to 1 polymorphic relation
    public function postable()
    {
        return $this->morphTo();
    }

    public function postToGuide() 
    { 
        return $this->belongsTo('App\Guide', 'guide_id');
    }
}
