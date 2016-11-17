@include('partials.head')
        <h1>Users Index</h1>
        <ul>
            @foreach ($users as $user)
                <li>Username: <a href="/users/{{$user->id}}">{{ $user->username }}</a></li>
            @endforeach
        </ul><br />
        <a href="/users/new">Add User</a><br />
        <a href="/">Home</a>
@include('partials.foot')
