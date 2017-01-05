<br />
<div class="container">
    <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">
            <nav id="top_nav">
                @if(session('user'))
                    <p id="loggedin_user"><i class="fa fa-user-circle-o fa-2x"></i> &nbsp{{ session('user')->username }}</p>
                @endif
                <ul>
                    <li><a href="/"><i class="fa fa-home fa-2x"></i></a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </header>
    </div><br />
</div>

