<?php defined('_JEXEC') or die('Restricted Access'); ?>

<?php foreach($this->items as $i => $item): ?>
    <tr class="row<?= $i % 2; ?>">
        <td><?= JHtml::_('grid.id', $i, $item->id); ?></td>
        <td><?= $item->role_name; ?></td>
        <td><?= $item->category_name; ?></td>
    </tr>
<?php endforeach; ?>
