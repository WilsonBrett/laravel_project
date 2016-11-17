<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use App\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\RedirectResponse;

    class UsersController extends Controller {
        public function getAll() {
            $users = DB::select('select * from users');

            return view('users.index', ['users' => $users]);
        }

        public function showUser($id) {
            $user = DB::select('select * from users where id = ?', [$id]);

            return view('users.show', ['user' => $user]);
        }

        public function editUser($id) {
            $user = DB::select('select * from users where id = ?', [$id]);

            return view('users.edit', ['user' => $user]);
        }

        public function updateUser($id) {
            //@ToDo record updated user in db

            return redirect('/users');
        }

        public function newUserForm() {
            return view('users.new');
        }

        public function addUser() {
            //@ToDo post data to db
            return redirect('/users');
        }

    }


