<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogRequests
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
        $response = $next($request);

        // Insert data into the "logs" table
        try {
            DB::table('logs')->insert([
                'ip_address' => $request->ip(),
                'request' => $request->fullUrl(),
                'response_code' => $response->status(),
            ]);
        } catch (\Throwable $th) {
            
        }
    

        return $response;
    }
}
