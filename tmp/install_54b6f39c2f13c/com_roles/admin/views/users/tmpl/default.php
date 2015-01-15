<?php defined ('_JEXEC') or die('Restricted access'); ?>
<?php JHtml::_('behavior.tooltip'); ?>
<h2><?= JText::_('COM_ROLES_USER_MANAGEMENT_LIST'); ?></h2>
<form action="<?= JRoute::_('index.php?option=com_roles'); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <thead><?= $this->loadTemplate('head'); ?></thead>
        <tfoot><?= $this->loadTemplate('foot'); ?></tfoot>
        <tbody><?= $this->loadTemplate('body'); ?></tbody>
    </table>
    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <?= JHtml::_('form.token'); ?>
    </div>
</form>
