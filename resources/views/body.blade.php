@extends('index')

@section('body')
<div id="about">
  <!-- Sobre Mim Section -->
  <div class="section-title text-center center">
    <h2>Sobre Mim</h2>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-12 col-md-6">
      <img src="img/about.jpg" class="img-responsive" alt="Sobre Mim">
    </div>
    
    <div class="col-xs-12 col-md-6">
      <div class="about-text">
        <p>
          Olá, bom dia!<br>
          Me chamo Rodrigo Amora, sou Desenvolvedor Web e Mobile.<br>
          Eu trabalho com a criação de Sites, Sistemas Web e Aplicativos Mobile (Android & iOS).
        </p>

        <a href="projetos#nav" class="btn btn-primary btn-lg page-scroll">Meu Portfolio</a>
      </div>
    </div>
  </div>
  
  <br><br>

  <!-- Serviços Section -->
  <div class="section-title text-center center">
    <h2>Serviços:</h2>
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-6 col-md-6">
      <img src="img/android1.png" class="img-responsive botton" alt="Serviços">
    </div>

    <div class="col-xs-6 col-md-6">
      <div class="about-text">
        <ol>
          <li><h5>Criação de Sites;</h5></li>
          <li><h5>Criação de Sistemas Web;</h5></li>
          <li><h5>Criação de Apps Mobile (Android & iOS);</h5></li>
        </ol>
      </div>
    </div>
  </div>

  <!-- Skills Section -->
  <div id="skills" class="row text-center">
    <div class="container">
      <div class="section-title center">
        <h2>Skills</h2><hr>
      </div>

      <div class="row">
          <h3>Linguagens:</h3><hr>
          <?php foreach ($linguagens as $linguagem): ?>
            <div class="col-md-3 col-sm-6 skill">
              <span class="chart" data-percent="{{$linguagem->percentual}}">
                <span class="percent">{{$linguagem->percentual}}</span>
              </span>
              <h4>{{$linguagem->nome}}</h4>
            </div>
          <?php endforeach ?>
        </div>

        <h4>Frameworks:</h4><hr>
        <?php foreach ($frameworks as $framework): ?>
          <div class="col-md-3 col-sm-6 skill">
            <span class="chart" data-percent="{{$framework->percentual}}">
              <span class="percent">{{$framework->percentual}}</span>
            </span>
            <h4>{{$framework->nome}}</h4>
          </div>
        <?php endforeach ?>
    </div>
  </div>
</div>
@stop