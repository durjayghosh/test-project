<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check())
            return redirect('admin')->withError('Please login from admin area first !');

        if (auth()->user() && auth()->user()->role !== 1) {
            // return redirect(RouteServiceProvider::HOME);
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
