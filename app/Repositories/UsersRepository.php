<?php

    namespace App\Repositories;
    use App\Interfaces\UsersInterface;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;

    class UsersRepository implements UsersInterface {

        //create
        public function add_user($req) {

            $username = $req->input('username');
            $user = $this->get_user_by_username($username);

            if($user) {
                //fail - user exists in db.
                return false;

            } else {
                User::create($req->all());
                return true;
            }
        }

        //read
        public function get_users() {
            return User::all();
        }

        public function get_user_by_username($u) {
            $user = User::where('username', $u)->get();
            return $result = $user->isEmpty() ? false : $user[0];
        }

        public function get_user_by_id($id) {
            $user = User::where('id', $id)->get();
            return $user[0];
        }

        //update
        public function update_user($req, $id) {
            $usr = User::findOrFail($id);
            $usr->update($req->all());
        }

        //delete
        public function delete_user($id) {
            User::where('id', '=', $id)->delete();
        }
    }


?>
