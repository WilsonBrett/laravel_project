@include('partials.head')
        <h1>Edit User</h1><br />
        <form method="post" action="/users/{{ $user->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('PUT') }}
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input name="fname" type="text" id="first_name" class="form-control" value="{{ $user->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input name="lname" type="text" id="last_name" class="form-control" value="{{ $user->lastname }}">
                    </div>
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input name="uname" type="text" id="user_name" class="form-control" value="{{ $user->username }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="pword" type="text" id="password" class="form-control" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="admin">Admin</label>
                        @if ($user->admin)
                            <input name="admin" type="checkbox" id="admin" class="form-control" value="1" checked>
                        @else
                            <input name="admin" type="checkbox" id="admin" class="form-control" value="1">
                        @endif
                    </div>
                </div>
                <div class="panel-footer">
                    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
                    <a href="/users/{{$user->id}}" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </form>
@include('partials.foot')
