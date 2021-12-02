<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */

    //!---- initial befor modifing (only Web Guard) ----
    /* public function handle(Request $request, Closure $next, ...$guards)
     {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                //  dd('GAURD 2021::: ' . $guard, auth()->user()->id);
                // switch (auth()->user()->id) {


                //     case '1':
                //         return redirect(RouteServiceProvider::HOME_ADMIN);
                //         dd(auth()->user()->id);
                //         break;

                //     default:
                //         return redirect(RouteServiceProvider::HOME);
                //         dd(auth()->user()->id);
                //         break;
                // }  

                // //-----


                  return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    } */


    //!--- After adabtion to bothe Web and Admin Gaurd
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;



        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                //dd($guard);


                if ($guard == 'admin' || auth()->user()->id == 1) {

                    config()->set('fortify.guard', 'admin');
                    config()->set('fortify.home', 'admin/home');

                    return redirect(RouteServiceProvider::HOME_ADMIN);
                } else {
                    //dd('GAURD 2021::: ' . $guard, auth()->user()->id);

                    config()->set('fortify.guard', 'web');
                    config()->set('fortify.home', 'admin/home');

                    return redirect(RouteServiceProvider::HOME);
                }
            }
        }

        return $next($request);
    }
}
