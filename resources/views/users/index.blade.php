@include('partials.head')
        <h1>Users Index</h1>
        <ul>
            @foreach ($users as $user)
                <li>Username: <a href="/users/{{$user->id}}">{{ $user->username }}</a></li>
            @endforeach
        </ul><br />
        <div>
            <a href="/users/new" class="btn btn-primary">Add User</a>
            <a href="/" class="btn btn-default">Home</a>
        </div>
@include('partials.foot')
