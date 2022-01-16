<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Models\post','post_tags')->orderBy('created_at','DESC');
    }
    public function getRouteKeyName()
    {
        return 'id';
    }

    use HasFactory;
}
