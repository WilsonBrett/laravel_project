<?php

namespace App\Classes;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class My_Auth_Check {

    public function check_session(Request $request) {
        if($request->session()->has('user')) {
            if(Cache::has('user')) {
                $session_username = $request->session()->get('user');
                $cached_username = Cache::get('user');

                if($session_username == $cached_username) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }
}
