
<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    
    </title>
  
    <?= $this->Html->css('bootstrap.min.css')?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('base.css')?>
    <?= $this->Html->css('template.css')?>

</head>
<body>
    <header>
        <div class="header-title">
            <span></span>
        </div>
    </header>
    <div id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
