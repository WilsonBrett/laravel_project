@include('partials.head')
        <h1>New User</h1>
        <form method="post" action="/users/create">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            Firstname: <input name="fname" type="text"><br />
            Lastname: <input name="lname" type="text"><br />
            Username: <input name="uname" type="text"><br /><br />
            <input name="submit" type="submit" value="Submit" class="btn btn-primary">
            <a href="/users" class="btn btn-default">Cancel</a>
            <a href="/" class="btn btn-default">Home</a>
        </form><br />

@include('partials.foot')
