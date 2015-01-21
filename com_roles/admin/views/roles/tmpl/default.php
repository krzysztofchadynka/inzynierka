<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles';
?>

<div class="starter-template">
    <h1><?= JText::_('COM_ROLES_ROLES_HEADER'); ?></h1>
    <p class="lead"><?= JText::_('COM_ROLES_ROLES_INFO'); ?></p>
</div>

<form action="<?= JRoute::_($url); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist table table-striped">
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

<footer class="footer">
    <p class="component-name">Roles Management</p>
    <p class="component-author">Krzysztof Chadynka Copyright 2014</p>
</footer>