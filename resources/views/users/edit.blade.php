@include('partials.head')
        <h1>Edit User</h1><br />
        <form method="post" action="/users/{{ $user[0]->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('PUT') }}
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input name="fname" type="text" id="first_name" class="form-control" value={{ $user[0]->firstname }}>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input name="lname" type="text" id="last_name" class="form-control" value={{ $user[0]->lastname }}>
                    </div>
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input name="uname" type="text" id="user_name" class="form-control" value={{ $user[0]->username }}>
                    </div>
                </div>
            <div class="panel-footer">
                <input name="submit" type="submit" class="btn btn-primary" value="Submit">
                <a href="/users" class="btn btn-default">Cancel</a>
            </div>
        </form>
@include('partials.foot')
