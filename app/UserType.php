<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class UserType extends Model
{
    protected $table = "users_types";
    protected $primaryKey = 'pk_user_type';

    protected $fillable = ['pk_user_type', 'user_type', 'description', 'created_pk_user', 'created_at', 'updated_pk_user', 'updated_at', 'deleted'];

    /* RELATIONSHIP - INICIO */
    public function users() {
        return $this->hasMany('App\User', 'pk_user_type', 'pk_user_type');
    }
    /* RELATIONSHIP - FIN */

    public function save(array $options = array()) {

        $this['updated_pk_user'] = Auth::user()->pk_user;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['pk_user_type'] === null) {
            $this['created_pk_user'] = Auth::user()->pk_user;
            $this['created_at'] = date('Y-m-d H:i:s');
            return save($options);
        } else {
            return false;
        }
    }

    public function update(array $attributes = array(), array $options = array()) {
        return save($options);
    }

    public function delete() {
        if( $this['deleted'] == 0) {
            $this['updated_pk_user'] = Auth::user()->pk_user;
            $this['updated_at'] = date('Y-m-d H:i:s');
            $this['deleted'] = 1;
            return save();
        } else {
            return false;
        } 
    }
}
