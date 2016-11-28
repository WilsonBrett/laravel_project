<?php

namespace App\Classes;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class My_Auth_Check {

    public function check_session(Request $request) {
        if($request->session()->has('username')) {
            if(Cache::has('username')) {
                $session_username = $request->session()->get('username');
                $cached_username = Cache::get('username');

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
