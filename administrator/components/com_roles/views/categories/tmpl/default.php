<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles';
?>

<div class="starter-template">
    <h1><?= JText::_('COM_ROLES_CATEGORIES_HEADER'); ?></h1>
    <p class="lead"><?= JText::_('COM_ROLES_CATEGORIES_INFO'); ?></p>
</div>
<form action="<?= JRoute::_($url); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist table table-striped">
        <thead><?php echo $this->loadTemplate('head');?></thead>
        <tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
        <tbody><?php echo $this->loadTemplate('body');?></tbody>
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