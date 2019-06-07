<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'pk_post';

    protected $fillable = [
        'pk_user', 'pk_category', 'title', 'slug', 'excerpt', 'body', 'status', 'file', 'views_numb', 'highlight', 'created_pk_user', 'created_at', 'updated_pk_user', 'updated_at', 'deleted'
    ];

    /* RELATIONSHIPS - BEGIN */
    public function user() {
        return $this->belongsTo('App\User', 'pk_user');
    }

    public function category() {
        return $this->belongsTo('\App\Category', 'pk_category');
    }

    public function tags() {
        return $this->belongsToMany('\App\Tag', 'post_tag', 'pk_post', 'pk_tag');
    }
    /* RELATIONSHIPS - END */


    public function save(array $options = array()) {

        $this['updated_pk_user'] = Auth::user()->pk_user;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['pk_post'] === null) {
            $this['created_pk_user'] = (Auth::check())? Auth::user()->pk_user : 1;
            $this['created_at'] = date('Y-m-d H:i:s');
            $this['updated_pk_user'] = (Auth::check())? Auth::user()->pk_user : 1;
            $this['updated_at'] = date('Y-m-d H:i:s');
            return parent::save($options);
        } else {
            return false;
        }
    }
}
