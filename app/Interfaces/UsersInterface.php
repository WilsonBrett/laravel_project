<?php

    namespace App\Interfaces;
    use Illuminate\Http\Request;

    interface UsersInterface {
        //create
        public function add_user(Request $request);

        //read
        public function get_users();
        public function get_user_by_username($username);
        public function get_user_by_id($id);

        //update
        public function update_user($id);

        //delete
        public function delete_user($id);
    }

?>
