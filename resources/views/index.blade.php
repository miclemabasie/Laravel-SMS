<p>{{ session('success') }}</p>

<h1>This is the home page</h1>
<h3>Welcome, {{ Auth::user()->name }}</h3>



<a href="{{ route("logout") }}">Logout</a>