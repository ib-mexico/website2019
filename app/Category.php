<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'pk_category';

    protected $fillable = [
        'category', 'slug', 'body', 'created_pk_user', 'created_at', 'updated_pk_user', 'updated_at', 'deleted'
    ];

    public function posts() {
        return $this->hasMany('App\Post', 'pk_category');
    }
}
