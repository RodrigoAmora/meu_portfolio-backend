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
			<hr>
	    </div>
	    
		<div class="portfolio-items">
			@foreach ($projetosPessoais as $proj)
				<div class="col-sm-6 col-md-3 col-lg-3 {{$proj->tipo}}">
		    		<div class="portfolio-item">
		    			<!--
						<div class="card text-center" style="width: 18rem;">
		    			-->
				    	<div class="card text-center">
				    		<img src="img/portfolio/{{$proj->img}}" class="rounded" width="128" height="128">
				    		
						  	<div class="card-body text-center">
						    	<h5 class="card-title">
						    		<strong>{{$proj->nome}}</strong>
						    	</h5>

						    	<hr>

						    	<p class="card-text text-center">
						    		{{$proj->desc}}
						    	</p>
						    	
						    	<div class="text-center">
						    		<a href="{{$proj->link}}" class="btn btn-primary" title="{{$proj->nome}}" target="_blank">ACESSE</a>
						    	</div>
						  	</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>

		<!-- Projetos Freelancer -->
		<div class="section-title text-center center">
			<h4>Projetos Freelancer</h4>
			<hr>
	    </div>

    	<div class="portfolio-items">
			@foreach ($projetosFreela as $proj)
		    	<div class="col-sm-6 col-md-3 col-lg-3 {{$proj->tipo}}">
		    		<div class="portfolio-item">
		    			<!--
						<div class="card text-center" style="width: 18rem;">
		    			-->
				    	<div class="card text-center">
				    		<a href="img/portfolio/{{$proj->img}}" id="{{$proj->id}}" class="aa">
				    			<img src="img/portfolio/{{$proj->img}}" class="rounded" width="128" height="128">
				    		</a>

				    		
				    		<!-- <p id='b{{$proj->id}}' class='te'><img src='http://www.rodrigoamora.com.br/portfolio/public/img/android2.png' alt='Image preview' width="128" height="128" /></p> -->

						  	<div class="card-body text-center">
						    	<h5 class="card-title">
						    		<strong>{{$proj->nome}}</strong>
						    	</h5>

						    	<hr>

						    	<p class="card-text text-center">
						    		{{$proj->descricao}}
						    	</p>
						    	
						    	<div class="text-center">
						    		<a href="{{$proj->link}}" class="btn btn-primary" title="{{$proj->nome}}" target="_blank">ACESSE</a>
						    	</div>
						  	</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
  	</div>	
</div>
@endsection