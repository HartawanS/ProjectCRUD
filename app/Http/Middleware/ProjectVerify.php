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
    public function handle($request, Closure $next, $segment)
    {
        $iduser = auth()->user()->id;
        if(restrict($iduser, $segment) == false){
            return redirect()->route('home');
        }
        return $next($request);
        // dd($segment);
    	// if ( $Master->id == $id )
     //    {
     //        return $next($request);
     //    }

     //    return redirect('home');
        // if($id == $request->id)
        // {
        //     return $next($request);
        // }
        // return redirect('/home');
    }
}
