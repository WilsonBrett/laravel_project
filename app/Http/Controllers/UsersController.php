<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use App\User;
    use App\Http\Controllers\Controller;
    use App\Classes\My_Auth_Check;
    use App\Repositories\UsersRepository;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;

    class UsersController extends Controller {
        public $repository;
        private $auth_check;

        public function __construct(UsersRepository $repository, My_Auth_Check $my_auth_check) {
            $this->repository = $repository;
            $this->auth_check = $my_auth_check;
        }

        public function getAll(Request $request) {
            if($this->authorized($request)) {
                $users = $this->repository->get_users();
                return view('users.index', ['users' => $users]);

            } else {
                return redirect('/');
            }
        }

        public function showUser(Request $request, $id) {
            if($this->authorized($request)) {
                //@TODO:  need to add try and catch for database queries
                $user = $this->repository->get_user_by_id($id);
                return view('users.show', ['user' => $user[0]]);
            } else {
                return redirect('/');
            }
        }

        public function editUser(Request $request, $id) {
            if($this->authorized($request)) {
                $user = $this->repository->get_user_by_id($id);
                return view('users.edit', ['user' => $user[0]]);
            } else {
                return redirect('/');
            }
        }

        public function updateUser(Request $request, $id) {
            if($this->authorized($request)) {
                $this->repository->update_user($request, $id);
                return redirect('/users');
            } else {
                return redirect('/');
            }
        }

        public function newUserForm(Request $request) {
            if($this->authorized($request)) {
                return view('users.new');
            } else {
                return redirect('/');
            }
        }

        public function addUser(Request $request) {
            if($this->authorized($request)) {
                $success = $this->repository->add_user($request);

                if($success) {
                    return redirect('/users');
                } else {
                    return redirect('/users/new')
                                ->with('error', 'Error:  Username is in use.  Please try another.');
                }


            } else {
                return redirect('/');
            }
        }

        public function deleteUser(Request $request, $id) {
            if($this->authorized($request)) {
                $this->repository->delete_user($id);
                return redirect('/users');
            } else {
                return redirect('/');
            }
        }

        private function authorized($req) {
            return $this->auth_check->check_session($req);
        }
    }


