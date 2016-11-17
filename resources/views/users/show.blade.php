@include('partials.head')
        <h1>Show User</h1>
        <ul>
            <li>ID: {{ $user[0]->id }}</li>
            <li>First Name: {{ $user[0]->firstname }}</li>
            <li>Last Name: {{ $user[0]->lastname }}</li>
            <li>Username: {{ $user[0]->username }}</li>
        </ul><br />
        <a href="/users/{{ $user[0]->id }}/edit">Edit User</a>

        <form method="post" action="/users/{{ $user[0]->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete {{$user[0]->firstname}}">
        </form>

        <a href="/">Home</a>
@include('partials.foot')
