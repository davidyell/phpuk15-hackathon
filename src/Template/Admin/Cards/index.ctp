<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="cards index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('effect') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('rarity') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cards as $card): ?>
        <tr>
            <td><?= $this->Number->format($card->id) ?></td>
            <td><?= h($card->name) ?></td>
            <td><?= h($card->effect) ?></td>
            <td><?= h($card->type) ?></td>
            <td><?= $this->Number->format($card->rarity) ?></td>
            <td><?= h($card->created) ?></td>
            <td><?= h($card->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $card->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $card->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?>
            </td>
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
		<div class="clearfix"><!-- blank --></div>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
