<?php

namespace App\Http\Middleware;

use App\Models\SiteSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $status   = SiteSetting::where('id', 1)->select('status')->first();
        if (auth()->check() && auth()->user()->role === 'admin' || $status->status == 0) {
            return $next($request);
        }
        return redirect('/coming');
    }
}
