<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CheckLanguageApi
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $lang = $request->header('accept-language');
        $valid = collect(['it', 'es', 'en'])->contains($lang);
        if ($valid) {
            App::setLocale($lang);
        } else {
            App::setLocale('en');
        }
        return $next($request);
    }
}
