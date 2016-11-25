<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use App\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;

    class UsersController extends Controller {
        public function getAll() {
            $users = User::all();
            return view('users.index', ['users' => $users]);
        }

        public function showUser($id) {
            $user = User::where('id', $id)->get();
            return view('users.show', ['user' => $user[0]]);
        }

        public function editUser($id) {
            $user = User::where('id', $id)->get();
            return view('users.edit', ['user' => $user[0]]);
        }

        public function updateUser(Request $request, $id) {

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
        }

        public function newUserForm() {
            return view('users.new');
        }

        public function addUser(Request $request) {

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
        }

        public function deleteUser($id) {
            User::where('id', '=', $id)->delete();

            return redirect('/users');
        }

    }


