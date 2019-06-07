<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $primaryKey = 'pk_slider';

    protected $fillable = [
        'pk_slider', 'title', 'body', 'url_redirect', 'status', 'file', 'created_pk_user', 'created_at', 'updated_pk_user', 'updated_at', 'deleted'
    ];

    /* RELATIONSHIPS - BEGIN */
    public function createdUser() {
        return $this->belongsTo('App\User', 'pk_user', 'created_pk_user');
    }

    public function updatedUser() {
        return $this->hasOne('App\User', 'pk_user', 'updated_pk_user');
    }
    /* RELATIONSHIPS - END */


    public function save(array $options = array()) {

        $this['updated_pk_user'] = Auth::user()->pk_user;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['pk_slider'] === null) {
            $this['created_pk_user'] = (Auth::check())? Auth::user()->pk_user : 1;
            $this['created_at'] = date('Y-m-d H:i:s');
            $this['updated_pk_user'] = (Auth::check())? Auth::user()->pk_user : 1;
            $this['updated_at'] = date('Y-m-d H:i:s');
            return parent::save($options);
        } else {
            return false;
        }
    }

    public function update(array $attributes = array(), array $options = array()) {
        return parent::save($options);
    }
}
