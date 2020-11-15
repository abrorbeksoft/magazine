<?php


namespace App\QueryFilter;
use Closure;
use Illuminate\Http\Request;

class Sort
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->has('sort'))
        {
            return $next($request);
        }
    }
}
