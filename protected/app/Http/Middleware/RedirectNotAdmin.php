<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Support\Facades\Auth;
class RedirectNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
             if (Auth::user()->level != 'admin') {
                Session::flash('redirectMessage','Anda Bukan admin');
                return redirect()->back();
            }
            return $next($request);
        }

        return redirect()->back();
    }
}
