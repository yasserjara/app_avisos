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

 
  </head>
<body>
<div>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
         
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
   
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('profession') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
         
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
    
            <td><?= h($user->name) ?></td>
            <td><?= h($user->email) ?></td>
            <td><?= $this->Number->format($user->phone) ?></td>
            <td><?= h($user->profession) ?></td>
            <td><?= h($user->description) ?></td>
           
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