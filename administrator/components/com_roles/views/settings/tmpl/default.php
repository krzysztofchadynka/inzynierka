<?php
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles';
?>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('table#settings-table input#cb0').attr("checked","checked");
        $('input#boxchecked').val(1);
    });
</script>

<div class="starter-template">
    <h1><?= JText::_('COM_ROLES_SETTINGS_HEADER'); ?></h1>
    <p class="lead"><?= JText::_('COM_ROLES_SETTINGS_INFO'); ?></p>
</div>

<form action="<?= $url; ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist table table-striped" id="settings-table">
        <thead><?= $this->loadTemplate('head');?></thead>
        <tbody><?= $this->loadTemplate('body');?></tbody>
    </table>
    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" id="boxchecked" value="0" />
        <?= JHtml::_('form.token'); ?>
    </div>
</form>

<footer class="footer">
    <p class="component-name">Roles Management</p>
    <p class="component-author">Krzysztof Chadynka Copyright 2014</p>
</footer>