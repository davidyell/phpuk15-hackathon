<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $card->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cards'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="cards form large-10 medium-9 columns">
    <?= $this->Form->create($card); ?>
    <fieldset>
        <legend><?= __('Edit Card') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('effect');
            echo $this->Form->input('type');
            echo $this->Form->input('rarity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
