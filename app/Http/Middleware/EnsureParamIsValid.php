<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureParamIsValid
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
        $id = $request->id;
        if ($id >= 1 && $id <= 3) {
            return response()->json([$request , 
            'error' => 'No se puede realizar esta accion', 400]);
        }
        return $next($request);
    }
}
