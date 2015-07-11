<?php
	$this->layout = 'inicio';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Yasser Jara" >
    <link rel="icon" href="../../favicon.ico">
    

    <title>Avisos Maestros</title>
  </head>

  <body>
	<div class="container">
       <div class="navbar-header">
       </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li class="active"><?= $this->Html->link(('home'), ['controller' =>'Pages','action' => 'home']) ?></li>
            <li class="active"><?= $this->Html->link(('Profesionales'), ['controller' =>'Users','action' => 'index']) ?> </li>
            <li class="active"><?= $this->Html->link(('Avisos'), ['controller' =>'Notices','action' => 'index']) ?></a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->

      <div class="container theme-showcase" role="main">
        <h1>Avisos Maestros</h1>
        <p class="lead">Es un projecto que tiene como objetivo generar mas trabajo para ti.
        <br> Publica tu aviso o registrate, para que te busquen para algun trabajo.</p> 
      </div>
      <button type="button" class="btn btn-lg btn-default"><?= $this->Html->link(('Registra tu Profecion'), ['controller' =>'Users','action' => 'add']) ?> </button>
      <button type="button" class="btn btn-lg btn-default"><?= $this->Html->link(__('Registra un aviso'), ['controller' => 'Notices', 'action' => 'add']) ?></button>
			   
   </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>