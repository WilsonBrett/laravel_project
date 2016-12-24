<header class="container">
    <nav id="top_nav">
        @if(session('user'))
            <p id="loggedin_user">Logged In:&nbsp&nbsp&nbsp{{ session('user')->username }}</p>
        @endif
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="/">Logout</a></li>
        </ul>
    </nav>
</header><br />
