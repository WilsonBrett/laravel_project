<?php
    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use App\Interfaces\UsersInterface;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Facades\Cache;

    class LoginController extends Controller {
        private $repository;
        private $login_error = "Username and password are incorrect.";

        public function __construct(UsersInterface $repository) {
            $this->repository = $repository;
        }

        public function login_form() {
            return view('login');
        }

        public function login(Request $request) {

            $username = $request->input('login_uname');
            $password = $request->input('login_pword');

            if($username && $password) {
                //@TODO:  Determine db response when no username found
                //Currently $user is still truthy upon failed username query
                $user = $this->repository->get_user_by_username($username);
                if($user) {
                    if(($user->password) === $password) {
                        if(!$request->session()->has('user')) {
                             $request->session()->put('user', $user);
                             //Cache::forever('user', $user);
                        }
                        return redirect('/dashboard');
                    } else {
                        return redirect('/')->with('error', $this->login_error);
                    }
                } else {
                    return redirect('/')->with('error', $this->login_error);
                }
            } else {
                return redirect('/')->with('error', $this->login_error);
            }
        }

        public function logout(Request $request) {
            if($request->session()->has('user')) {
                $request->session()->forget('user');
            }

            // if(Cache::has('user')) {
            //     Cache::forget('user');
            // }

            return redirect('/');
        }

        //if not logged in redirect to home page - implement auth_main
        public function show_dashboard() {
            return view('dashboard.dashboard_home');
        }
    }


