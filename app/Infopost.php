<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infopost extends Model
{

    /**
     * MASS ASSIGN
     */
    protected $fillable = [
        'post_id',
        'post_status',
        'comment_status'
    ];

    

    /**
     * Laravel non gestire date create e update_at
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * DB Relations
     */
    // info_posts - posts that
    public function post() {
        return $this->belongsTo('App\Post');
    }
}
