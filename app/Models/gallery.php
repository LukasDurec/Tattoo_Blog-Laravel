<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Models\tag','gallery_tags');
    }

    public function getRouteKeyName()
    {
        return "id";
    }
    public function user(){
        return $this->belongsTo('App/Models/User','posted_by');
    }

    use HasFactory;
}
