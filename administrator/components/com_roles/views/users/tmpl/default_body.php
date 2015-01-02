<?php defined ('_JEXEC') or die('Restricted access'); ?>

<?php foreach ($this->users as $i => $user): ?>
    <tr class="row<?= $i % 2; ?>">
        <td><?= $user->id; ?></td>
    </tr>
<?php endforeach; ?>
