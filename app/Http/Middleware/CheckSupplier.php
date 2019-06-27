<?php

namespace App\Http\Middleware;

use Closure;

class CheckSupplier
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
        $user = $request->session()->get('user_data');
        if($user == null || $user['group'] != 2){
            return redirect('supplier/login');
        }
        return $next($request);
    }
}
