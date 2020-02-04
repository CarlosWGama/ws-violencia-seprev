<?php

namespace App\Http\Middleware;

use Closure;
use Exception;

class ApiValidation
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
        $header = $request->header('HYSDTDWQI14784AJSUDWYQJSKDZLOZLZOZLASDHWQ1487AKK');
        if($header != 'AJUSDYWQYJHNCSA4788145698AKSDIIUQWJ14ASDJUW1S'){
            return response()->json(['message' => 'App key not found'], 404);
        }
        return $next($request);
    }
}
