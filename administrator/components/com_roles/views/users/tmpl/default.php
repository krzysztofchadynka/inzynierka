<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles';
JFactory::getDocument()->addStyleSheet(JURI::root().'administrator/components/com_roles/css/style.css');
?>
<div class="starter-template">
    <h1><?= JText::_('COM_ROLES_USERS_ROLES_HEADER'); ?></h1>
    <p class="lead"><?= JText::_('COM_ROLES_USERS_ROLES_INFO'); ?></p>
</div>
<form action="<?= $url; ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist table table-striped">
        <thead><?= $this->loadTemplate('head');?></thead>
        <tfoot><?= $this->loadTemplate('foot');?></tfoot>
        <tbody><?= $this->loadTemplate('body');?></tbody>
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
