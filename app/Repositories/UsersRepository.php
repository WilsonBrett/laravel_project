<?php

    namespace App\Repositories;
    use App\Interfaces\UsersInterface;
    use App\Models\User;
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
                $pm = $req->input('project_manager');

                User::insert(['firstname' => $firstname,
                              'lastname' => $lastname,
                              'username' => $username,
                              'password' => $password,
                              'admin' => $admin,
                              'project_manager' => $pm]);
                return true;
            }
        }

        //read
        public function get_users() {
            return User::all();
        }

        public function get_user_by_username($u) {
            $user = User::where('username', $u)->get();
            return $user[0];
        }

        public function get_user_by_id($id) {
            $user = User::where('id', $id)->get();
            return $user[0];
        }

        //update
        public function update_user($req, $id) {
                $new_firstname = $req->input('fname');
                $new_lastname = $req->input('lname');
                $new_username = $req->input('uname');
                $password = $req->input('pword');
                $admin = $req->input('admin');
                $pm = $req->input('project_manager');

                User::where('id', $id)
                        ->update(['firstname'=>$new_firstname,
                                  'lastname'=>$new_lastname,
                                  'username'=>$new_username,
                                  'password' => $password,
                                  'admin' => $admin,
                                  'project_manager' => $pm]);
        }

        //delete
        public function delete_user($id) {
            User::where('id', '=', $id)->delete();
        }
    }


?>
