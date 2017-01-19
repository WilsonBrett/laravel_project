@extends('dashboard.dashboard_layout')

@section('dashboard_content')
    <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
        <form method="post" action="/users">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" name="username" class="form-control" id="user_name" placeholder="Username">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="admin">Admin</label>
                        <input type="checkbox" name="admin" class="form-control" id="admin" value="1">
                    </div>
                    <div class="form-group">
                        <label for="project_manager">Project Manager</label>
                        <input type="checkbox" name="project_manager" class="form-control" id="project_manager" value="1">
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        <a href="/users" class="btn btn-default">Cancel</a>
                        <a href="/logout" class="btn btn-default">Logout</a>
                    <div>
                </div>
            </div>
        </form>
    </div>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li><br />
            @endforeach
        </ul>
    @endif
@stop
