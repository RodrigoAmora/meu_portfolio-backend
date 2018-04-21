@extends('index')

@section('body')
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Me</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/android-oreo.gif" class="img-responsive" alt="Rodrigo Amora" width="400" height="267"> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p>Olá, bom dia!<br> Me chamo Rodrigo Amora, sou Desenvolvedor Web e Mobile.</p>
          <p>Eu trabalho com a criação de Site, Sistemas Web e Aplicativos Mobile (Android & iOS).</p>
          <a href="/projetos" class="btn btn-primary btn-lg page-scroll">Meu Portfolio</a> </div>
      </div>
    </div>
  </div>
</div>
@stop