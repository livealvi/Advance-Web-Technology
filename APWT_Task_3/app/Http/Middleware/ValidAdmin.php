<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidAdmin
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
        if ($request->session()->get('user.1') == 'Admin') {
            return $next($request);
        } elseif ($request->session()->get('user')) {
            return redirect()->route('no-permission');
        } else {
            return redirect()->route('login');
        }
    }
}
