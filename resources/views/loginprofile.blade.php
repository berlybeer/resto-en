<h1>Login Profile page</h1>
<h3>Welcome: {{session('data')['user']}}</h3>

<h3>{{session('data')['password']}}</h3>
<a href="logout">Logout</a>

<h3>{{print_r(session('data'))}}</h3>
