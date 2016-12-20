@include('partials.head')
<header class="container">
    <h1>Landing Page</h1>
    <nav id="top_nav">
        @if(session('user'))
            <p id="loggedin_user">Logged In:&nbsp&nbsp&nbsp{{ session('user')->username }}</p>
        @endif
        <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="/">Logout</a></li>
        </ul>
    </nav>
</header><br />
<div class="container">
    <nav class="col-md-2" id="side_nav">
        <div class="panel panel-primary">
            <div class="panel-heading">Menu</div>
            <div class="panel-body">
                <ul>
                    @if(session('user')->admin)
                        <label>Admin</label>
                        <li><a href="/users">System Users</a></li>
                        <li><a href="/rates">Billing Rates</a></li>
                        <hr />
                    @endif

                    <li><a href="/clients">Clients</a></li>
                    <li><a href="/departments">Departments</a></li>
                    <li><a href="/titles">Titles</a></li>
                    <li><a href="/employees">Employees</a></li>
                    <li><a href="/forecasts">Forecasts</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-10">
        <div class="panel panel-primary">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">Panel Content</div>
        </div>
    </div>
</div>
@include('partials.foot')
