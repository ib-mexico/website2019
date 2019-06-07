<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class Privilege extends Model
{
    protected $table = "privileges";
    public $timestamps = false;
    protected $primaryKey = 'pk_privilege';

    protected $fillable = ['pk_privilege_category', 'parent_pk_privilege', 'privilege', 'tag', 'menu', 'menu_order', 'menu_url', 'active'];


    /* RELATIONSHIPS - INICIO */
    public function privilegeCategory() {
        return $this->belongsTo('App\PrivilegeCategory', 'pk_privilege_category', 'pk_privilege_category');
    }
    /* RELATIONSHIPS - FIN */

    /*static public function view() {
        $retorno = DB::table('view_privilegios');
        return $retorno;
    }

    static public function viewFind($pk_privilegio) {
        $retorno = DB::table('view_privilegios');
        $retorno->where('pk_privilegio', '=', $pk_privilegio);
        return $retorno->get()->first();
    }*/

    public function save(array $options = array()) {
        $this['updated_pk_user'] = Auth::user()->pk_user;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['pk_privilegio'] === null) {
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
