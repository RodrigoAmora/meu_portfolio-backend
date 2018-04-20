<html lang="{{ app()->getLocale() }}">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="/css/app.css" />
	<title>Rodrigo Amora</title>
</head>
<body>
<div class="container">

	<nav class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		<h5 class="my-0 mr-md-auto font-weight-normal">Rodrigo Amora</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="/">Home</a>
			<a class="p-2 text-dark" href="/projetos">Portf&oacute;lio</a>
			<a  class="p-2 text-dark" href="#">Contato</a>
			<a  class="p-2 text-dark" href="http://goo.gl/FQg16" target="_blanlk">Blog</a>
		</nav>
	</nav>

	@yield('body')
	@yield('projetos')

	<footer>
		<h2>Rodrigo Amora</h2>
	</footer>
</div>
</body>
</html>