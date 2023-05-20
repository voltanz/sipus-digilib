<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    // $request adalah objek permintaan HTTP yang masuk (informasi tentang permintaan yang dibuat oleh pengguna, seperti URL, header, dan data permintaan)
    // $next adalah closure (penutup) yang mewakili tindakan berikutnya dalam rantai middleware setelah middleware saat ini selesai melakukan pemrosesan.
    // Auth::guard($guard)->check() digunakan untuk memeriksa apakah pengguna saat ini telah terautentikasi.
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}