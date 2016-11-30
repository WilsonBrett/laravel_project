<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use App\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Facades\Cache;

    class LoginController extends Controller {

        public function login(Request $request) {

            $username = $request->input('login_uname');
            $password = $request->input('login_pword');

            if($username && $password) {
                //@TODO:  Determine db response when no username found
                //Currently $user is still truthy upon failed username query
                $user = User::where('username', $username)->get();

                if($user->count() > 0) {
                    if(($user[0]->password) === $password) {
                        //user authenticated

                        //create the session id
                        $request->session()->put('username', $user[0]->username);

                        //add username to cache for the auth check - lasts forever
                        Cache::forever('username', $user[0]->username);

                        return redirect('/users');
                    } else {
                        $error = "Username and password are incorrect.";
                        return redirect('/')->with('error', $error);
                    }
                } else {
                    $error = "Username and password are incorrect.";
                    return redirect('/')->with('error', $error);
                }
            } else {
                $error = "Username and password are incorrect.";

                //should these be redirects with values instead?
                //How do I handle the error variable in the web.php file?
                return redirect('/')->with('error', $error);
            }
        }

        public function logout(Request $request) {
            if(Cache::has('username')) {
                Cache::forget('username');
            }

            if($request->session()->has('username')) {
                $request->session()->forget('username');
            }

            return view('index');
        }

    }


