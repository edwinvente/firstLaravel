<?php

namespace App\Http\Middleware;

use Closure;

class TestYear
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
        $year = $request->route('year');
        if (is_null($year) || $year != 2019) {
            return redirect('/pelicula');
        }
        return $next($request);
    }
}
