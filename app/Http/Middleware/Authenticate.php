<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
        if ($request->expectsJson()){
            return null;
        }
        // check  if the request URI contains 'backend' or 'frontend'
        if  ($request->is('backend/*')){
            return route('backend.login');
        } elseif ($request->is('frontend/*')){ /*akan digunakan jika frontend tersedia */
            return route('frontend.login'); /*akan digunakan jika frontend tersedia */
        }
        // default redirect if none of the above match
        return route('backend.login'); /* ganti ke frontend jika telah tersedia */
    }
}