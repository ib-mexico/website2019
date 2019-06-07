<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'pk_user';

    protected $fillable = ['pk_user_type', 'name', 'last_name', 'email', 'profile_pic', 'user', 'password', 'access_numb', 'last_access', 'created_pk_user', 'created_at', 'updated_pk_user', 'updated_at', 'deleted'];
    protected $hidden = ['password', 'remember_token'];

    /* RELATIONSHIPS - INICIO */
    public function userType() {
        return $this->belongsTo('App\UserType', 'pk_user_type', 'pk_user_type');
    }

    public function createdUser() {
        return $this->belongsTo('App\User', 'pk_user', 'created_pk_user');
    }

    public function updatedUser() {
        return $this->belongsTo('App\User', 'pk_user', 'updated_pk_user');
    }

    public function privileges() {
        return $this->belongsToMany('App\Privilege', 'users_privileges', 'pk_user', 'pk_privilege');
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
    /* RELATIONSHIPS - FIN */

    public function save(array $options = array()) {

        $this['updated_pk_user'] = Auth::user()->pk_user;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['pk_user'] === null) {
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
