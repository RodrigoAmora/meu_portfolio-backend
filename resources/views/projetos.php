<html>
<head>
	<?php require 'header.html' ?>
</head>
<body>
	<div class="container">
		<?php require 'menu.php' ?>

		<div class="jumbotron">
			<h3 class="my-0 mr-md-auto font-weight-normal">Portfólio</h3>
			
				<h3 style="background-color: #AAC0FF;">Trabalhos Pessoais:</h3><hr>
				
					<div class="card-deck mb-2 text-center">
						<div class="card mb-4 box-shadow">
							<div class="panel-heading">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Meu apps Android</h4>
								</div>
								<div class="card-body">
									<a href="https://goo.gl/Y7D9X" target="_blank"><img src="images/play_store.png" alt="Meus apps Anroid." width="120" height="90"></a>
								</div>
							</div>
						</div>

						<div class="card mb-4 box-shadow">
							<div class="panel-heading">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">Meu apps iOS</h4>
								</div>
								<div class="card-body">
									<a href="https://goo.gl/sVpNU7" target="_blank"><img src="images/app_store.png" width="120" height="90"></a>
								</div>
							</div>
						</div>
					</div>

			<p class="lead" id="trablhos_freelancer">
				<h3 style="background-color: #AAC0FF;">Trabalhos Freelancer:</h3><hr>
				<div class="row">
					<div class="card-deck mb-3 text-center">
						<?php foreach ($projetosFreela as $proj): ?>
							<div class="card mb-4 box-shadow">
								<div class="panel-heading">
									<div class="card-header">
										<h3 class="panel-title"><?= $proj->nome ?></strong></h3>
									</div>
									<div class="card-body">
										<?= $proj->link ?>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</p>
		</div>
	</div>
</body>
</html>