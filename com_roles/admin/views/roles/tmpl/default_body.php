<?php defined ('_JEXEC') or die('Restricted access'); ?>

<?php foreach ($this->items as $i => $item): ?>
    <tr class="row<?= $i % 2; ?>">
        <td><?= JHtml::_('grid.id', $i, $item->id); ?></td>
        <td><?= $item->id; ?></td>
        <td><?= $item->username; ?></td>
        <td></td>
    </tr>
<?php endforeach; ?>
