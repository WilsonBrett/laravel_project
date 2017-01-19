@extends('dashboard.dashboard_layout')

@section('dashboard_content')
    <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
        <form method="post" action="/users/{{ $user->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('PUT') }}
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input name="firstname" type="text" id="first_name" class="form-control" value="{{ $user->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input name="lastname" type="text" id="last_name" class="form-control" value="{{ $user->lastname }}">
                    </div>
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input name="username" type="text" id="user_name" class="form-control" value="{{ $user->username }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="text" id="password" class="form-control" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="admin">Admin</label>
                        @if ($user->admin)
                            <input name="admin" type="checkbox" id="admin" class="form-control" value="1" checked>
                        @else
                            <input name="admin" type="checkbox" id="admin" class="form-control" value="1">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="project_manager">Project Manager</label>
                        @if ($user->project_manager)
                            <input name="project_manager" type="checkbox" id="project_manager" class="form-control" value="1" checked>
                        @else
                            <input name="project_manager" type="checkbox" id="project_manager" class="form-control" value="1">
                        @endif
                    </div>
                </div>
                <div class="panel-footer">
                    <input name="submit" type="submit" class="btn btn-primary" value="Update User">
                    <a href="/users/{{$user->id}}" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@stop
