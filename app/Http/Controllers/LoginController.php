<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use App\User;
    use App\Http\Controllers\Controller;
    use App\Classes\My_Auth_Check;
    use App\Interfaces\UsersInterface;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Facades\Cache;

    class LoginController extends Controller {
        private $repository;
        private $auth_check;

        public function __construct(UsersInterface $repository, My_Auth_Check $auth_check) {
            $this->repository = $repository;
            $this->auth_check = $auth_check;
        }

        public function login(Request $request) {

            $username = $request->input('login_uname');
            $password = $request->input('login_pword');

            if($username && $password) {
                //@TODO:  Determine db response when no username found
                //Currently $user is still truthy upon failed username query
                $user = $this->repository->get_user_by_username($username);
                if($user->count() > 0) {
                    if(($user[0]->password) === $password) {
                        //user authenticated

                        //create the session id
                        $request->session()->put('username', $user[0]->username);

                        //add username to cache for the auth check - lasts forever
                        Cache::forever('username', $user[0]->username);

                        return redirect('/home');
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

        public function show_home(Request $request) {
            if($this->auth_check->check_session($request)) {
                return view('home');
            } else {
                return redirect('/');
            }
        }
    }


