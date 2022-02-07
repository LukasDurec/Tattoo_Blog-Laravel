<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Models\tag','post_tags');
    }
    public function getRouteKey()
    {
        return 'id';
    }

    public function user(){
        return $this->belongsTo('App/Models/User','posted_by');
    }
}
