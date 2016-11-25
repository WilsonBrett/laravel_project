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
                $user = User::where('username', 'bwilson')->get();
                //var_dump($user);

                if($user) {
                    if(($user[0]->password) === $password) {
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
                return view('index', ['error' => $error]);
            }
        }
    }


