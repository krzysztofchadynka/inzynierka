<?php defined ('_JEXEC') or die('Restricted access'); ?>
<?php JHtml::_('behavior.tooltip'); ?>

<form action="<?= JRoute::_('index.php?option=com_roles'); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <thead><?= $this->loadTemplate('head'); ?></thead>
        <tfoot><?= $this->loadTemplate('foot'); ?></tfoot>
        <tbody><?= $this->loadTemplate('body'); ?></tbody>
    </table>
</form>
