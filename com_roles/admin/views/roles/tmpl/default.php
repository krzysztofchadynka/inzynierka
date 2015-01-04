<?php defined ('_JEXEC') or die('Restricted access'); ?>
<?php JHtml::_('behavior.tooltip'); ?>
<h2><?= JText::_('COM_ROLES_ROLES_MANAGEMENT_LIST'); ?></h2>

<form action="<?= JRoute::_('index.php?option=com_roles'); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <thead><?= $this->loadTemplate('head'); ?></thead>
        <tbody><?= $this->loadTemplate('body'); ?></tbody>
    </table>
</form>