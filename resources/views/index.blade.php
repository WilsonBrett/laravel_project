@include('partials.head')
<header class="page-header">
    <h1>Application X</h1>
</header>
<form class="col-md-4 col-md-offset-4" method="post" action="/">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="login_uname">Username</label>
        <input type="text" name="login_uname" id="login_uname" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="login_uname">Password</label>
        <input type="password" name="login_pword" id="login_pword" class="form-control" placeholder="Password">
    </div>
    <input type="submit" value="login" class="btn btn-primary"><br /><br />
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
</form>
@include('partials.foot')
