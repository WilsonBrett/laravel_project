<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use App\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;

    class LoginController extends Controller {

        public function login(Request $request) {

            $username = $request->input('login_uname');
            $password = $request->input('login_pword');

            if($username && $password) {
                //@TODO:  Determine db response when no username found
                //Currently $user is still truthy upon failed username query
                $user = User::where('username', $username)->get();
                //var_dump($user);

                if($user) {
                    if(($user[0]->password) === $password) {
                        //user authenticated

                        //create the session id
                        $request->session()->put('username', $user[0]->username);

                        return redirect('/users');
                    } else {
                        $error = "Username and password are incorrect.";
                        return view('index', ['error' => $error]);
                    }
                } else {
                    $error = "Username and password are incorrect.";
                    return view('index', ['error' => $error]);
                }
            } else {
                $error = "Username and password are incorrect.";

                //should these be redirects with values instead?
                //How do I handle the error variable in the web.php file?
                return view('index', ['error' => $error]);
            }
        }

        public function logout(Request $request) {
            //Deletes the csrf token on the login form for some reason
            //$request->session()->flush();
            $request->session()->forget('username');
            return view('index');
        }

    }


