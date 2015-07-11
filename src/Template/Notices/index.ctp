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
<body>
<div class="notices index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
      
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('region') ?></th>
            <th><?= $this->Paginator->sort('city') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
 
        </tr>
    </thead>
    <tbody>
    <?php foreach ($notices as $notice): ?>
        <tr>
            <td><?= $this->Number->format($notice->id) ?></td>
            <td><?= h($notice->title) ?></td>
            <td><?= $this->Number->format($notice->phone) ?></td>
            <td><?= h($notice->region) ?></td>
            <td><?= h($notice->city) ?></td>
            <td><?= h($notice->created) ?></td>
            
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</body>
</html>