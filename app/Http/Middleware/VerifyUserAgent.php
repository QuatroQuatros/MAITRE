<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyUserAgent
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
        $agent = $request->header('user-agent');

        if($agent == '(tablet|ipad|playbook|silk)|(android(?!.*mobi))'){
            return view('app');

        }elseif($agent == 'Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)'){
            return view('app');
        }else{
            return $next($request);
        }
        

    }
}
