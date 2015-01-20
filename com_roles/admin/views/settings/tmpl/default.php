<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles';
?>
<p class="roles-admin-description"><?= JText::_('COM_ROLES_SETTINGS_INFO'); ?></p>
<form action="<?= $url; ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist table table-striped" id="settings-table">
        <thead><?= $this->loadTemplate('head');?></thead>
        <tbody><?= $this->loadTemplate('body');?></tbody>
    </table>
    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <?= JHtml::_('form.token'); ?>
    </div>
</form>