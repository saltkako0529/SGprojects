<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Outsourcing'), ['action' => 'edit', $outsourcing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Outsourcing'), ['action' => 'delete', $outsourcing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $outsourcing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Outsourcings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Outsourcing'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="outsourcings view large-9 medium-8 columns content">
    <h3><?= h($outsourcing->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($outsourcing->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postalcode') ?></th>
            <td><?= h($outsourcing->postalcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($outsourcing->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($outsourcing->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($outsourcing->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($outsourcing->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($outsourcing->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($outsourcing->remarks)); ?>
    </div>
</div>
