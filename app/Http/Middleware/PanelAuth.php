<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\LoginController;
use App\UserPrivilege;
use Closure;
use Session;
use Auth;

class PanelAuth
{
    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check() ) {
            if (!Session::has('privilegesMenu')) {
                Session::put("privilegesMenu", UserPrivilege::getPrivilegesMenu(Auth::user()));
            }
            
            View()->share('_PRIVILEGES_MENU_', Session::get('privilegesMenu'));

            return $next($request);
        } else {
            return redirect()->to('/login-panel');
        }
    }
}
