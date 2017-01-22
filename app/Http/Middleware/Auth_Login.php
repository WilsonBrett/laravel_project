<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Closure;

class Auth_Login {
    public function handle(Request $req, Closure $next) {
        if($req->session()->has('user')) {
            //user is logged in - don't make get (shows login form) and post requests to login route.
            return redirect('/dashboard');
        }

        return $next($req);
    }
}

