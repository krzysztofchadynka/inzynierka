<?php defined ('_JEXEC') or die('Restricted access'); ?>

<?php foreach ($this->items as $i => $role): ?>
    <tr class="row<?= $i % 2; ?>">
        <td><?= JHtml::_('grid.id', $i, $role->id); ?></td> 
        <td><?= $role->role_id; ?></td>
        <td><?= $role->name; ?></td>
    </tr>
<?php endforeach; ?>