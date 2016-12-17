@include('partials.head')
<header class="container">
    <h1>Landing Page</h1>
    <nav id="top_nav">
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
    <nav class="col-md-3" id="side_nav">
        <div class="panel panel-primary">
            <div class="panel-heading">Menu</div>
            <div class="panel-body">
                <ul>
                    <li><a href="/users">Users</a></li>
                    <li><a href="/clients">Clients</a></li>
                    <li><a href="/departments">Departments</a></li>
                    <li><a href="/titles">Titles</a></li>
                    <li><a href="/employees">Employees</a></li>
                    <li><a href="/rates">Billing Rates</a></li>
                    <li><a href="/forecasts">Forecasts</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@include('partials.foot')
