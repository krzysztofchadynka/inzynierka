<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles';
?>

<form action="<?php echo JRoute::_($url); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <thead><?= $this->loadTemplate('head');?></thead>
        <tbody><?= $this->loadTemplate('body');?></tbody>
        <tfoot><?= $this->loadTemplate('foot');?></tfoot>
    </table>
</form>