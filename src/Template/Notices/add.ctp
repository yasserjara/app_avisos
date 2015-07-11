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

		<div class="notices form large-10 medium-9 columns">
    		<?= $this->Form->create($notice) ?>
	      
    		<fieldset>
     			<legend><?= __('Agrega tu Aviso') ?></legend>
        			<?php
            		echo $this->Form->input('title');
            		echo $this->Form->input('description');
            		echo $this->Form->input('phone');
            		echo $this->Form->input('region');
            		echo $this->Form->input('city');
        			?>
    		</fieldset>
    		<?= $this->Form->button(__('Submit')) ?>
    		<?= $this->Form->end() ?>
		</div>
</body>
</html>