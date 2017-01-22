<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Interfaces\UsersInterface;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;
    use App\Http\Requests\UserValidateRequest;

    class UsersController extends Controller {
        public $repository;

        public function __construct(UsersInterface $repository) {
            $this->middleware('auth_main');
            $this->repository = $repository;
        }

        public function index() {
            $users = $this->repository->get_users();
            return view('users.index', ['users' => $users]);
        }

        public function show($id) {
            $user = $this->repository->get_user_by_id($id);
            return view('users.show', ['user' => $user]);
        }

        public function edit($id) {
            $user = $this->repository->get_user_by_id($id);
            return view('users.edit', ['user' => $user]);
        }

        public function update(UserValidateRequest $request, $id) {
            $this->repository->update_user($request, $id);
            return redirect('/users');
        }

        public function create() {
            return view('users.create');
        }

        public function store(UserValidateRequest $request) {
            $success = $this->repository->add_user($request);

            if($success) {
                return redirect('/users');
            } else {
                return redirect('/users/create')
                            ->with('error', 'Error:  Username is in use.  Please try another.');
            }
        }

        public function delete($id) {
            $this->repository->delete_user($id);
            return redirect('/users');
        }
    }


