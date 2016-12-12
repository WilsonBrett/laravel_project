<?php

    namespace App\Repositories;
    use App\Interfaces\UsersInterface;
    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;

    class UsersRepository implements UsersInterface {

        //create
        public function add_user($req) {
            $username = $req->input('uname');
            $user = $this->get_user_by_username($username);

            if($user->count()) {
                //fail - user exists in db.
                return false;

            } else {
                $firstname = $req->input('fname');
                $lastname = $req->input('lname');
                $password = $req->input('pword');
                $admin = $req->input('admin');

                User::insert(['firstname' => $firstname,
                              'lastname' => $lastname,
                              'username' => $username,
                              'password' => $password,
                              'admin' => $admin]);
                return true;
            }
        }

        //read
        public function get_users() {
            return User::all();
        }

        public function get_user_by_username($u) {
            return User::where('username', '=', $u);
        }

        public function get_user_by_id($id) {
            return User::where('id', $id)->get();
        }

        //update
        public function update_user($req, $id) {
                $new_firstname = $req->input('fname');
                $new_lastname = $req->input('lname');
                $new_username = $req->input('uname');
                $password = $req->input('pword');
                $admin = $req->input('admin');

                User::where('id', $id)
                        ->update(['firstname'=>$new_firstname,
                                  'lastname'=>$new_lastname,
                                  'username'=>$new_username,
                                  'password' => $password,
                                  'admin' => $admin]);
        }

        //delete
        public function delete_user($id) {
            User::where('id', '=', $id)->delete();
        }
    }


?>
