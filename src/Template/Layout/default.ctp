<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shot Wars!</title>
    <?= $this->Html->meta('icon') ?>

	<?= $this->Html->css('common'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div id="container">
		<header>
			<h1>Shot wars!</h1>
			<p>It's like Star Wars, but without a galaxy far far away..</p>
		</header>

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
	
	<?php echo $this->Html->script([
		'jquery-2.1.3.min',
		'common'
	]);?>
	<?= $this->fetch('script') ?>
</body>
</html>
