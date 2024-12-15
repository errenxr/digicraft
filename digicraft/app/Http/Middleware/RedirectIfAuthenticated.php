<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated as RedirectIfAuthenticatedMiddleware;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\JsonResponse as HttpFoundationJsonResponse;

class RedirectIfAuthenticated extends RedirectIfAuthenticatedMiddleware{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response | HttpFoundationJsonResponse
    {
        if(Auth::guard('admin')->check()){
            return redirect(route('admindashboard.tampil'));
        }else if(Auth::guard('customer')->check()){
            return redirect(route('dashboardcust.tampil'));
        }
        return $next($request);
    }
}
