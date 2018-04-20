<html lang="{{ app()->getLocale() }}">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="/css/app.css" />
	<title>Rodrigo Amora</title>
</head>
<body>
<div class="container">

	<nav class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		<h5 class="my-0 mr-md-auto font-weight-normal">
			<a class="text-muted" href="/">Rodrigo Amora</a>
		</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="/">Home</a>
			<a class="p-2 text-dark" href="/projetos">Portf&oacute;lio</a>
			<a  class="p-2 text-dark" href="#">Contato</a>
			<a  class="p-2 text-dark" href="http://goo.gl/FQg16" target="_blanlk">Blog</a>
		</nav>
	</nav>

	@yield('body')
	@yield('projetos')

	<footer class="pt-4 my-md-5 pt-md-5 border-top">
		<div class="row">
			<div class="col-12 col-md">
				<h5>Contato:</h5><hr>
				<ul class="list-unstyled text-small">
					<li class="text-muted">
						<img class="rounded" src="images/gmail.svg" width="25" height="25">
						<strong>E-mail:</strong> rodrigo.amora.freitas@gmail.com
					</li>
				</ul>
			</div>

			<div class="col-12 col-md">
				<div class="card bg-light mb-3" style="max-width: 18rem;">
					<div class="card-header">Redes Socais:</div>
					<div class="card-body">
						<br/>
						<a href="https://goo.gl/729QP" target="_blank"><img class="rounded" src="images/github.png" width="50" height="50"></a>
						<a href="https://goo.gl/FNd1sV" target="_blank"><img class="rounded" src="images/linkedin.png" width="50" height="50"></a>
						<a href="https://goo.gl/Rx0G1" target="_blank"><img class="rounded" src="images/twitter.png" width="50" height="50"></a>
						<a href="https://goo.gl/lwF6Sz" target="_blank"><img class="rounded" src="images/slideshare.png" width="50" height="50"></a>
						<a href="https://goo.gl/aP2Ku3" target="_blank"><img class="rounded" src="images/instagram.png" width="50" height="50"></a>
						<a href="https://goo.gl/766xci" target="_blank"><img class="rounded" src="images/facebook.png" width="50" height="50"></a>
						<a href="https://goo.gl/zAsIGY" target="_blank"><img class="rounded" src="images/skoob.png" width="50" height="50"></a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md">
				<h5>Menu:</h5><hr>
				<ul class="list-unstyled text-small">
					<li class="text-muted">
						<a class="text-muted" href="/">Home</a>
					</li>

					<li class="text-muted">
						<a class="text-muted" href="/projetos">Projetos</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</div>
</body>
</html>