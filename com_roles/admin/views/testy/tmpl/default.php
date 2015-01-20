<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles';
?>

<form action="<?= $url; ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <thead><?= $this->loadTemplate('head'); ?></thead>
        <tfoot><?= $this->loadTemplate('foot'); ?></tfoot>
        <tbody><?= $this->loadTemplate('body'); ?></tbody>
    </table>
    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>