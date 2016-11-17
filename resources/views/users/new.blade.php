@include('partials.head')
        <h1>New User</h1>
        <form method="post" action="/users/create">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            Firstname: <input name="fname" type="text"><br />
            Lastname: <input name="lname" type="text"><br />
            Username: <input name="uname" type="text"><br /><br />
            <input name="submit" type="submit" value="Submit">
            <a href="/users">Cancel</a>
        </form><br />
        <a href="/">Home</a>
@include('partials.foot')
