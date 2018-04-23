@extends('index')

@section('body')
<div id="contact" class="text-center">
  	<div class="overlay">
	    <div class="container">
	      	<div class="section-title center">
	        	<h2>Entre em contato comigo!</h2>
	        	<h4>rodrigo.amora.freitas@gmail.com</h4>
	        	<hr>
	      	</div>

	      	<div class="col-md-8 col-md-offset-2">
	        	<form action="/enviarEmail" name="sentMessage" id="contactForm" novalidate>
					<div class="row">
		            	<div class="col-md-6">
		            		<div class="form-group">
		                		<input type="text" name="nome" id="name" class="form-control" placeholder="Seu Nome..." required>
		                		<p class="help-block text-danger" id="errorName">
		                			Nome vaizo!
		                		</p>
		            		</div>
		            	</div>

		            	<div class="col-md-6">
		              		<div class="form-group">
		                		<input type="email" name="email" id="email" class="form-control" placeholder="Seu E-mail..." required="required">
		                		<p class="help-block text-danger" id="errorEmail">
		                			E-mail vaizo!
		                		</p>
		              		</div>
		            	</div>

		            	<div class="col-md-12">
		              		<div class="form-group">
		                		<input type="text" name="assunto" id="assunto" class="form-control" placeholder="Assunto..." required="required">
		                		<p class="help-block text-danger" id="errorAssnto">
		                			Assunto vaizo!
		                		</p>
		              		</div>
		            	</div>
	          		</div>

		          	<div class="form-group">
		            	<textarea name="mensagem" id="message" class="form-control" rows="4" placeholder="Mensagem..." required></textarea>
		            	<p class="help-block text-danger" id="errorMsg">
		            		Mensagem vazio!
		            	</p>
		          	</div>

		          	<div id="success"></div>

		          	<button type="submit" id="aa" class="btn btn-default">ENVIAR</button>
	        	</form>

		        <div class="social">
		          	<ul>
			            <li>
			            	<a href="https://goo.gl/729QP" target="_blank"><img src="img/redes_sociais/github.png" width="35" height="35"></a>
			            </li>

			            <li>
			            	<a href="https://goo.gl/FNd1sV" target="_blank"><img src="img/redes_sociais/linkedin.png" width="35" height="35"></a>
			            </li>

			            <li>
			            	<a href="https://goo.gl/Rx0G1" target="_blank"><img src="img/redes_sociais/twitter.png" width="35" height="35"></a>
			            </li>

			            <li>
			            	<a href="https://goo.gl/766xci" target="_blank"><img src="img/redes_sociais/facebook.png" width="35" height="35"></a>
			            </li>

			            <li>
			            	<a href="https://goo.gl/aP2Ku3" target="_blank"><img src="img/redes_sociais/instagram.png" width="35" height="35"></a>
			            </li>

			            <li>
			            	<a href="https://goo.gl/lwF6Sz" target="_blank"><img src="img/redes_sociais/slideshare.png" width="35" height="35"></a>
			            </li>

			            <li>
			            	<a href="https://goo.gl/zAsIGY" target="_blank"><img src="img/redes_sociais/skoob.png" width="35" height="35"></a>
			            </li>
		          	</ul>
		        </div>
	      	</div>
    	</div>
  	</div>
</div>
@stop