@include('partials.head')
        <h1>Show User</h1><br />
        <div class="panel panel-primary">
            <div class="panel-heading">
                <label>User Details</label>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <ul>
                        <li class="list-group-item">ID: {{ $user -> id }}</li>
                        <li class="list-group-item">First Name: {{ $user -> firstname }}</li>
                        <li class="list-group-item">Last Name: {{ $user -> lastname }}</li>
                        <li class="list-group-item">Username: {{ $user -> username }}</li>
                        <li class="list-group-item">Password: {{ $user -> password }}</li>
                        @if ($user -> admin)
                            <li class="list-group-item">Admin: True</li>
                        @else
                            <li class="list-group-item">Admin: False</li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="panel-footer">
                <a href="/users/{{ $user -> id }}/edit" class="btn btn-primary">Edit User</a>
                <form method="post" action="/users/{{ $user -> id }}" id="deleteForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Delete User" class="btn btn-danger">
                </form>
                <a href="/users" class="btn btn-default">Index</a>
            </div>
        </div>
@include('partials.foot')
