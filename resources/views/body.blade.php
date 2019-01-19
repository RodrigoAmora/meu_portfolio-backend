@extends('index')
@section('body')
<div id="about">
  <!-- Sobre Mim Section -->
  <div class="section-title text-center center">
    <h2>Sobre Mim</h2>
    <hr>
  </div>

  <!-- Sobre mim Section -->
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <img src="img/about-dev.jpeg" class="img-responsive" alt="Sobre Mim">
    </div>
    
    <div class="col-xs-12 col-md-6">
      <div class="about-text">
        <p>
          Olá, bom dia!<br>
          Me chamo Rodrigo Amora, sou Desenvolvedor Web e Mobile.<br>
          Eu trabalho com a criação de Sites, Sistemas Web e Aplicativos Mobile (Android & iOS).
        </p>

        <p>
          Você está precisando criar alguma dessas soluções?<br>
          Entre em contato comigo: <a href="mailto:rodrigo.amora.freitas@gmail.com">rodrigo.amora.freitas@gmail.com</a>
        </p>
        <a href="projetos#nav" class="btn btn-primary btn-lg page-scroll">Meu Portfolio</a>
      </div>
    </div>
  </div>
  
  <br><br>

  <!-- Serviços Section -->
  <div class="row" id="servicos">
    <div class="section-title text-center center">
      <h2>Serviços:</h2>
      <hr>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="col-xs-3 col-md-3">
          <img src="img/web-site.jpg" class="img-responsive botton" alt="Serviços"><br>
          <p class="text-center"><b>Criação de Sites</b></p>
        </div>

        <div class="col-xs-3 col-md-3">
            <img src="img/development.jpg" class="img-responsive botton" alt="Serviços"><br>
            <p class="text-center"><b>Criação de Sistemas Web</b></p>
        </div>

        <div class="col-xs-3 col-md-3">
            <img src="img/mobile-apps.jpg" class="img-responsive botton" alt="Serviços"><br>
            <p class="text-center"><b>Criação de Apps Mobile (Android & iOS)</b></p>
        </div>

        <div class="col-xs-3 col-md-3">
            <img src="img/social-media.jpg" class="img-responsive botton" alt="Serviços"><br>
            <p class="text-center"><b>Social Media</b></p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Skills Section -->
  <div id="skills" class="row text-center">
    <div class="container">
      <div class="section-title center">
        <h2>Skills</h2><hr>
      </div>

      <!-- Linguagens -->
      <div class="row">
        <h3>Linguagens:</h3>
        <hr>
        <?php foreach ($linguagens as $linguagem): ?>
          <div class="col-md-3 col-sm-6 skill">
            <span class="chart" data-percent="{{$linguagem->percentual}}">
              <span class="percent">{{$linguagem->percentual}}</span>
            </span>

            <h4>{{$linguagem->nome}}</h4>
          </div>
        <?php endforeach ?>
      </div>

      <!-- Frameworks -->
      <div class="row">
        <h4>Frameworks:</h4>
        <hr>
        <?php foreach ($frameworks as $framework): ?>
          <div class="col-md-3 col-sm-6 skill">
            <span class="chart" data-percent="{{$framework->percentual}}">
              <span class="percent">{{$framework->percentual}}</span>
            </span>

            <h4>{{$framework->nome}}</h4>
          </div>
        <?php endforeach ?>
      </div>

      <!-- Bancos de Dados: -->
      <div class="row">
        <h4>Bancos de Dados:</h4>
        <hr>
        <?php foreach ($databases as $db): ?>
          <div class="col-md-3 col-sm-6 skill">
            <span class="chart" data-percent="{{$db->percentual}}">
              <span class="percent">{{$db->percentual}}</span>
            </span>

            <h4>{{$db->nome}}</h4>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
@stop