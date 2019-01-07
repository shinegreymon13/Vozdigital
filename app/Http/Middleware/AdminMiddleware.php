<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        $estado = auth()->user()->estado;
        if($estado != 2){
          return redirect('login');
        }else{
          return $next($request);
        }
    }
}
