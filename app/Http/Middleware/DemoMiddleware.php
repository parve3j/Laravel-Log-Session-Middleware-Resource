<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /// Part 1
        // if($request->header('API-Key')==123){
        //     return $next($request);
        // }else{
        //     return response()->json([
        //         'message'=>'failed'
        //     ]);
        // }

        /// part 2 Redirect
        // $key= $request->key;

        // if($key==123){
        //     return $next($request);
        // }else{
        //     return redirect('/demoaction_redirect');
        // }

        /// Grope routing
        $key= $request->header('API-Key');

        if($key==123){
            return $next($request);
        }else{
            return response()->json([
                'message'=>'Unauthorized'
            ],403);
        }
    }
}
