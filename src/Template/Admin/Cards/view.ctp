<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cards view large-10 medium-9 columns">
    <h2><?= h($card->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($card->name) ?></p>
            <h6 class="subheader"><?= __('Effect') ?></h6>
            <p><?= h($card->effect) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($card->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($card->id) ?></p>
            <h6 class="subheader"><?= __('Rarity') ?></h6>
            <p><?= $this->Number->format($card->rarity) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($card->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($card->modified) ?></p>
        </div>
    </div>
</div>
