<?php
    //backspaces used in the top 3 lines.  not sure why.
    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use App\Classes\My_Auth_Check;
    use App\Interfaces\UsersInterface;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;
    use App\Http\Requests\NewUserRequest;

    class UsersController extends Controller {
        public $repository;
        private $auth;

        public function __construct(UsersInterface $repository, My_Auth_Check $auth) {
            $this->repository = $repository;
            $this->auth = $auth;
        }

        public function getAll(Request $request) {
            if($this->auth->check_session($request)) {
                $users = $this->repository->get_users();
                return view('users.index', ['users' => $users]);

            } else {
                return redirect('/');
            }
        }

        public function showUser(Request $request, $id) {
            if($this->auth->check_session($request)) {
                $user = $this->repository->get_user_by_id($id);
                return view('users.show', ['user' => $user]);
            } else {
                return redirect('/');
            }
        }

        public function editUser(Request $request, $id) {
            if($this->auth->check_session($request)) {
                $user = $this->repository->get_user_by_id($id);
                return view('users.edit', ['user' => $user]);
            } else {
                return redirect('/');
            }
        }

        public function updateUser(Request $request, $id) {
            if($this->auth->check_session($request)) {
                $this->repository->update_user($request, $id);
                return redirect('/users');
            } else {
                return redirect('/');
            }
        }

        public function newUserForm(Request $request) {
            if($this->auth->check_session($request)) {
                return view('users.new');
            } else {
                return redirect('/');
            }
        }

        //public function addUser(Request $request) {
        public function addUser(NewUserRequest $request) {
            if($this->auth->check_session($request)) {
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
            if($this->auth->check_session($request)) {
                $this->repository->delete_user($id);
                return redirect('/users');
            } else {
                return redirect('/');
            }
        }
    }


