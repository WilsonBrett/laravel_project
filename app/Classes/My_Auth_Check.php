<?php

namespace App\Classes;

use Illuminate\Http\Request;

class My_Auth_Check {

    public function check_session(Request $request) {
        if($request->session()->has('username')) {
            //check to see if username in session matches that of the cache
            $session_username = $request->session()->get('username');
            if($session_username == 'bwilson') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
