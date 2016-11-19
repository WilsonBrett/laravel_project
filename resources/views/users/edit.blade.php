@include('partials.head')
        <h1>Edit User</h1>
        <form method="post" action="/users/{{ $user[0]->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('PUT') }}
            Firstname: <input name="fname" type="text" value={{ $user[0]->firstname }}><br />
            Lastname: <input name="lname" type="text" value={{ $user[0]->lastname }}><br />
            Username: <input name="uname" type="text" value={{ $user[0]->username }}><br /><br />
            <input name="submit" type="submit" class="btn btn-primary" value="Submit">
            <a href="/users" class="btn btn-default">Cancel</a>
        </form><br />

@include('partials.foot')
