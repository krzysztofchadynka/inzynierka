<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');

$url = 'index.php?option=com_roles';
?>

<form action="<?= JRoute::_($url); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <thead><?= $this->loadTemplate('head'); ?></thead>
        <tbody><?= $this->loadTemplate('body'); ?></tbody>
        <tfoot><?= $this->loadTemplate('foot'); ?></tfoot>
    </table>
    
    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <?= JHtml::_('form.token'); ?>
    </div>
</form>