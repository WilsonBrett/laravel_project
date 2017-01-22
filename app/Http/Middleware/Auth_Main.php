<?php

namespace App\Http\Middleware;

Use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Closure;

class Auth_Main {
    public function handle(Request $req, Closure $next) {
        if(!$req->session()->has('user')) {
            //user is not logged in
            return redirect('/');
        }

        return $next($req);
    }
}
