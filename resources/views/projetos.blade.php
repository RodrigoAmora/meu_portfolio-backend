@extends('index')

@section('body')
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Portfolio</h2>
      <hr>
    </div>

    <!-- Categorias -->
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active btn btn-primary">All</a></li>
            <li><a href="#" data-filter=".web" class="btn btn-primary">Web</a></li>
            <li><a href="#" data-filter=".app" class="btn btn-primary">Apps Mobile</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <!-- Projetos Pessoais -->
	<div class="section-title text-center center">
		<h4>Projetos Pessoais</h4>
    </div>

    <div class="row">
		<div class="portfolio-items">
			<div class="col-sm-6 col-md-3 col-lg-3 app">
		    	<div class="card text-center" >
		    		<img src="img/play_store.png" class="rounded" alt="Apps Android">
				  	<div class="card-body">
				    	<h5 class="card-title text-center">Meu apps Android</h5>
				    	<hr>
				    	<p class="card-text text-center">
				    		Meus aplicativos pessoais para Android.
				    	</p>
				    	<div class="text-center">
				    		<a href="https://goo.gl/Y7D9X" class="btn btn-primary" target="_blank">ACESSE</a>
				    	</div>
				  	</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 col-lg-3 app">
		    	<div class="card text-center" >
		    		<img src="img/app_store.png" class="rounded" alt="Apps Android">
				  	<div class="card-body">
				    	<h5 class="card-title text-center">Meu apps iOS</h5>
				    	<hr>
				    	<p class="card-text text-center">
				    		Meus aplicativos pessoais para iOS.
				    	</p>
				    	<div class="text-center">
				    		<a href="https://goo.gl/sVpNU7" class="btn btn-primary" target="_blank">ACESSE</a>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>

	<br><hr><br>

	<!-- Projetos Freelancer -->
	<div class="section-title text-center center">
		<h4>Projetos Freelancer</h4>
    </div>

    <div class="row">
    	<div class="portfolio-items">
			<?php foreach ($projetosFreela as $proj): ?>
		    	<div class="col-sm-6 col-md-3 col-lg-3 <?= $proj->tipo ?>">
		    		<div class="portfolio-item">
				    	<div class="card" style="width: 18rem;">
						  	<div class="card-body">
						    	<h5 class="card-title text-center">
						    		<strong><?= $proj->nome ?></strong>
						    	</h5>

						    	<hr>

						    	<p class="card-text text-center">
						    		<?= $proj->descricao ?>
						    	</p>
						    	
						    	<div class="text-center">
						    		<a href="<?= $proj->link ?>" class="btn btn-primary" target="_blank">ACESSE</a>
						    	</div>
						  	</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
  	</div>
</div>
<br>
@stop