<?php
	$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Yasser Jara" >
    <link rel="icon" href="../../favicon.ico">

    <title>Avisos Maestros</title>

    <!-- Bootstrap core CSS -->
	
    <?= $this->Html->css('bootstrap.min.css')?>
	 <?= $this->Html->css('bootstrap-theme.min.css') ?>
	 <?= $this->Html->css('base.css')?>
    <?= $this->Html->css('template.css')?>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

 
  </head>

  <body>

	<div class="container">

      <div class="starter-template">
        <h1>Avisos Maestros</h1>
        <p class="lead">Este es projecto tiene como objetivo generar mas trabajo para ti.<br> Publica tu aviso o registrate, para que te busquen para algun trabajo.</p>
      </div>

<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Profession') ?></h6>
            <p><?= h($user->profession) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($user->description) ?></p>
            <h6 class="subheader"><?= __('Region') ?></h6>
            <p><?= h($user->region) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($user->city) ?></p>
        </div>
      
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Notices') ?></h4>
    <?php if (!empty($user->notices)): ?>
    <table cellpadding="0" cellspacing="0">
        
        <?php foreach ($user->notices as $notices): ?>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>


    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>



