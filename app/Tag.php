<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{   
    protected $table = 'tags';
    protected $primaryKey = 'pk_tag';

    protected $fillable = [
        'tag', 'slug', 'created_pk_user', 'created_at', 'updated_pk_user', 'updated_at', 'deleted'
    ];

    public function posts() {
        return $this->belongsToMany('\App\Post', 'post_tag', 'pk_tag', 'pk_post');
    }
}
