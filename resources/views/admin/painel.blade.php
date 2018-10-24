<html>
<head>

</head>
<body>
	<h1>Admin</h1>
	@auth
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
		</div>
	@endauth
	
	<hr>
	
	<a href="novoProjeto">Novo Projeto</a><br>
	@yield('body')

</body>
</html>
