<div class='card <?php echo $card->type;?>'>
	<div class="back">
		<h2><?php echo $card->name;?></h2>
		<div class='description'>
			<p class='type <?php echo $card->type;?>'><?php echo ucwords($card->type);?></p>
			<p><?php echo $card->effect;?></p>		
		</div>
	</div>
	<div class="front">
		
	</div>
</div>