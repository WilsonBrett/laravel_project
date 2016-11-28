<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use App\User;
    use App\Http\Controllers\Controller;
    use App\Classes\My_Auth_Check;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;

    class UsersController extends Controller {

        public function getAll(Request $request, My_Auth_Check $my_auth_check) {
            if($my_auth_check->check_session($request)) {
                $users = User::all();
                return view('users.index', ['users' => $users]);
            } else {
                return redirect('/');
            }
        }

        public function showUser(Request $request, My_Auth_Check $my_auth_check, $id) {
            if($my_auth_check->check_session($request)) {
                $user = User::where('id', $id)->get();
                return view('users.show', ['user' => $user[0]]);
            } else {
                return redirect('/');
            }
        }

        public function editUser(Request $request, My_Auth_Check $my_auth_check, $id) {
            if($my_auth_check->check_session($request)) {
                $user = User::where('id', $id)->get();
                return view('users.edit', ['user' => $user[0]]);
            } else {
                return redirect('/');
            }
        }

        public function updateUser(Request $request, My_Auth_Check $my_auth_check, $id) {
            if($my_auth_check->check_session($request)) {
                $new_firstname = $request->input('fname');
                $new_lastname = $request->input('lname');
                $new_username = $request->input('uname');
                $password = $request->input('pword');
                $admin = $request->input('admin');

                User::where('id', $id)
                        ->update(['firstname'=>$new_firstname,
                                  'lastname'=>$new_lastname,
                                  'username'=>$new_username,
                                  'password' => $password,
                                  'admin' => $admin]);

                return redirect('/users');
            } else {
                return redirect('/');
            }
        }

        public function newUserForm(Request $request, My_Auth_Check $my_auth_check) {
            if($my_auth_check->check_session($request)) {
                return view('users.new');
            } else {
                return redirect('/');
            }
        }

        public function addUser(Request $request, My_Auth_Check $my_auth_check) {
            //@Todo: Need to make sure another user doesn't already have this username
            if($my_auth_check->check_session($request)) {
                $firstname = $request->input('fname');
                $lastname = $request->input('lname');
                $username = $request->input('uname');
                $password = $request->input('pword');
                $admin = $request->input('admin');

                User::insert(['firstname' => $firstname,
                              'lastname' => $lastname,
                              'username' => $username,
                              'password' => $password,
                              'admin' => $admin]);

                return redirect('/users');
            } else {
                return redirect('/');
            }
        }

        public function deleteUser(Request $request, My_Auth_Check $my_auth_check, $id) {
            if($my_auth_check->check_session($request)) {
                User::where('id', '=', $id)->delete();
                return redirect('/users');
            } else {
                return redirect('/');
            }
        }

    }


