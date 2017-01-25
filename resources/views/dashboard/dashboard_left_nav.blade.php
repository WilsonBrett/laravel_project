<nav class="col-xs-4 col-sm-3 col-md-2 col-lg-2" id="side_nav">
    <div class="panel panel-primary">
        <div class="panel-heading">Menu</div>
        <div class="panel-body">
            <ul>
                @if(session('user')->admin)
                    <label>Admin</label>
                    <li><a href="/users">System Users</a></li>
                    <li><a href="/clients">Clients</a></li>
                    <li><a href="/departments">Departments</a></li>
                    <li><a href="/titles">Titles</a></li>
                    <li><a href="/employees">Employees</a></li>
                    <hr />
                    <li><a href="/rates">Billing Rates</a></li>
                    <li><a href="/time_sheets">Time Sheets</a></li>
                    <li><a href="/projects_jobs">Projects & Jobs</a></li>
                    <li><a href="/reports">Reports</a></li>
                    <hr />
                @endif

                @if(session('user')->project_manager)
                    <label>Project Management</label>
                    <li><a href="/forecasts/create">Forecasts</a></li>
                    <li><a href="/#">My Projects</a></li>
                    <li><a href="/#">My Contracts</a></li>
                    <hr />
                @endif

                <li><a href="/#">My Time Sheets</a></li>
            </ul>
        </div>
    </div>
</nav>
