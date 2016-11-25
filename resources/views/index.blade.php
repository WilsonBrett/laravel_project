@include('partials.head')
<header class="col-md-12">
    <h1>Forecaster</h1>
    <form class="col-md-4 col-md-offset-4" method="post" action="/">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="login_uname">Login</label>
            <input type="text" name="login_uname" id="login_uname" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="login_uname">Password</label>
            <input type="password" name="login_pword" id="login_pword" class="form-control" placeholder="Password">
        </div>
        <input type="submit" value="submit" class="btn btn-primary"><br />
        @if (isset($error))
            <p>{{$error}}</p>
        @endif
    </form>
</header>
@include('partials.foot')
