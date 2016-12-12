<?php

    namespace App\Repositories;
    use App\Interfaces\UsersInterface;
    use App\User;
    use Illuminate\Http\Request;

    class UsersRepository implements UsersInterface {

        //create
        public function add_user(Request $request) {


        }

        //read
        public function get_users() {
            return User::all();
        }

        public function get_user_by_username($username) {
            //User::where('username', '=', $username);
        }

        public function get_user_by_id($id) {
            //User::where('id', $id)->get();
        }

        //update
        public function update_user($id) {

        }

        //delete
        public function delete_user($id) {

        }
    }


?>
