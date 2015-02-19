<div class='plays draw'>
	<div class='play-space one'>
		<h2 class='red team'>Red team</h2>
		<?php echo $this->element('card', ['card' => $cards[0]]);?>
	</div>
	<div class='play-space two'>
		<h2 class='blue team'>Blue team</h2>
		<?php echo $this->element('card', ['card' => $cards[1]]);?>
	</div>
	
	<div class='clearfix'><!-- blank --></div>
</div>