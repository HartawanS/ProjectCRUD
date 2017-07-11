<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ProjectVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id)
    {
    	if ( $Master->id == $id )
        {
            return $next($request);
        }

        return redirect('home');
        // if($id == $request->id)
        // {
        //     return $next($request);
        // }
        // return redirect('/home');
    }
}
