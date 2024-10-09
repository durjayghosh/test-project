<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Models\{MenuPermission, Menu, Brand, User};
// use Illuminate\Support\Facades\Session;

class IsPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!isset(Auth::user()->id)){
            return redirect()->route('admin.index');
        }


        // dd(session('RestaurantId'), session('RestaurantName'), 'w');
        // if(Auth::user()->role != 1){
        //     $MenuPermission = Menu::join('menu_permission', 'menu_permission.menu_id', 'menu.id')->where('menu_permission.role_id', Auth::user()->role)->pluck('route_name');
        //     // dd($MenuPermission->toArray());

        //     session(['menuPermission' => $MenuPermission->toArray()]);
        //     if(Route::currentRouteName() == 'admin.dashboard'){

        //     }elseif(!in_array(Route::currentRouteName(), $MenuPermission->toArray())){
        //         return redirect()->route('403');
        //     }
        // }
        return $next($request);
    }
}
