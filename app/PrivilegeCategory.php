<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class PrivilegeCategory extends Model
{
    protected $table = "privileges_categories";
    public $timestamps = false;
    protected $primaryKey = 'pk_privilege_category';

    protected $fillable = ['privilege_category', 'menu_order', 'menu_icon'];

    /* RELATIONSHIP - INICIO */
    public function privileges() {
        return $this->hasMany('App\Privilege', 'pk_privilege_category', 'pk_privilege_category');
    }
    /* RELATIONSHIP - FIN */
}
