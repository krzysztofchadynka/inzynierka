<?php
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
    <tr class="row<?php echo $i % 2; ?>">
        <td>
            <?= JHtml::_('grid.id', $i, $item->id); ?>
        </td>
        <td>
            <?= $item->role; ?>
        </td>
        <td>
            <?= $item->category; ?>
        </td>
    </tr>
<?php endforeach; ?>