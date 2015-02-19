<div class='plays draw'>
	<div class='play-space one'>
		<h2 class='red team'>Red team</h2>
		<div class="card-wrapper">
			<?php echo $this->element('card', ['card' => $cards[0]]);?>
		</div>
	</div>
	<div class='play-space two'>
		<h2 class='blue team'>Blue team</h2>
		<div class="card-wrapper">
			<?php echo $this->element('card', ['card' => $cards[1]]);?>
		</div>
	</div>
	
	<div class='clearfix'><!-- blank --></div>
	
	<p>
		<?php echo $this->Html->link('Play!', '#play', ['class' => 'btn', 'id' => 'play-btn']);?>
		<?php echo $this->Html->link('Draw again', ['controller' => 'plays', 'action' => 'draw'], ['class' => 'btn go-button']);?>
	</p>
</div>