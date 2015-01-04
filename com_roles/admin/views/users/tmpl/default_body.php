<?php defined ('_JEXEC') or die('Restricted access'); ?>

<?php foreach ($this->items as $i => $user): ?>
    <tr class="row<?= $i % 2; ?>">
        <td><?= $user->id; ?></td>
        <td><?= $user->username; ?></td>
    </tr>
<?php endforeach; ?>
