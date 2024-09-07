<?php

namespace App\Http\Middleware;

use App\Http\Resources\MediaImageResource;
use App\Models\Language;
use App\Models\TemporaryUpload;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class HttpsProtocol
{
    public function getRoute(){
        return Route::current()->getName();
    }
    public function handle(Request $request, Closure $next)
    {
        if (!$request->secure()&& App::environment() === 'production') {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
