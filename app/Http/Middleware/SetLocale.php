<?php

namespace App\Http\Middleware;

use App\Models\SystemLanguage;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $system_language = SystemLanguage::where('locale', $request->segment(1))->first();
        if (isset($system_language)) {
            $locale =  $system_language->status == 1 ? $request->segment(1) : "en";
        } else {
            $locale = "en";
        }
        app()->setLocale($locale);
        URL::defaults(['locale' => $request->segment(1)]);
        return $next($request);
    }
}
