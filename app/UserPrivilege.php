<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\PrivilegeCategory;
use App\Privilege;

use DB;
use Auth;

class UserPrivilege extends Model
{
    protected $table = "users_privileges";
    protected $primaryKey = 'pk_user';

    protected $fillable = ['pk_user', 'pk_privilege', 'created_pk_user', 'created_at'];

    public function create(array $options = array()) {
        $this['created_pk_user'] = Auth::user()->pk_user;
        $this['created_at'] = date('Y-m-d H:i:s');
        return save($options);
    }

    public static function getPrivilegesMenu(User $objUser) {
        $return = array();

        $lstPrivilegesCategories = PrivilegeCategory::orderBy('menu_order', 'asc')->orderBy('pk_privilege_category', 'asc')->get();

        foreach ($lstPrivilegesCategories as $itemPrivilegeCategory) {
            $lstPrivileges = $objUser->privileges
                    ->where('pk_privilege_category', '=', $itemPrivilegeCategory->pk_privilege_category)
                    ->where('menu', '=', 1)
                    ->where('active', '=', 1)
                    ->sortBy('menu_order');
            if(sizeof($lstPrivileges) > 0 ) {
                array_push($return, array(
                    'category'         => $itemPrivilegeCategory,
                    'privileges'       => $lstPrivileges
                ));
            }
        }

        return $return;
    }
}
