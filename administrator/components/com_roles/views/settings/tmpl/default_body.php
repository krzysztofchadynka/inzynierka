<?php defined('_JEXEC') or die('Restricted Access'); ?>
<?php foreach($this->items as $i => $item): ?>
    <tr class="row<?= $i % 2; ?>">
        <td class="inactive"><?= JHtml::_('grid.id', $i, $item->id); ?></td>
        <td class="inactive"><?= $item->id; ?></td>
        <td><?= $item->header; ?></td>
        <td><?= $item->description; ?></td>
        <td><?= $item->image; ?></td>
        <td><?= $item->user_info; ?></td>
        <td><?= $item->role_info; ?></td>
        <td><?= $item->categories_info; ?></td>
    </tr>
<?php endforeach; ?>