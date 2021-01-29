<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * MASS ASSIGN
     */
    protected $fillable = [
        'title',
        'body',
        'slug',
        'path_img'
    ];

    /**
     *  DB RELATIONS
     */

    // posts - info_posts
    public function infopost() {
        return $this->hasOne('App\Infopost');
    }

    // posts - comments
    public function comments() {
        return $this->hasMany('App\Comment');
    }

    // posts - tags
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
