@extends('index')

@section('projetos')
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Portfolio</h2>
      <hr>
    </div>

    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web Design</a></li>
            <li><a href="#" data-filter=".app">App Development</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <!-- Projetos Pessoais -->
    <div class="row">
		<div class="portfolio-items">
			<div class="col-sm-6 col-md-3 col-lg-3 app">
				<div class="portfolio-item">
					
              		<a href="https://goo.gl/Y7D9X" target="_blank"><img src="img/play_store.png" class="img-responsive" alt="Meu Apps"></a>
					<h4 class="my-0 font-weight-normal">Meu apps Android</h4>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 app">
				<div class="portfolio-item">
					<a href="https://goo.gl/Y7D9X" target="_blank">
						<img src="img/app_store.png" class="img-responsive" alt="Meu Apps">
					</a>
					<h4 class="my-0 font-weight-normal">Meu apps Android</h4>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<!-- Projetos Freelancer -->
    <div class="row">
    	<div class="portfolio-items">
    	<?php foreach ($projetosFreela as $proj): ?>
	    	<div class="col-sm-6 col-md-3 col-lg-3 web">
		    	<div class="card" style="width: 18rem;">
				  	<div class="card-body">
				    	<h5 class="card-title"><?= $proj->nome ?></h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    	<a href="<?= $proj->link ?>" class="btn btn-primary">URL</a>
				  	</div>
				</div>
			</div>
		<?php endforeach ?>
		</div>
  	</div>
</div>
<br>
@stop