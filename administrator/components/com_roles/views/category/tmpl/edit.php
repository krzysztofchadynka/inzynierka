<?php
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
$url = 'index.php?option=com_roles&layout=edit&id=' . (int) $this->item->id;
?>

<div class="starter-template">
    <h1><?= JText::_('COM_ROLES_CATEGORY_DETAILS'); ?></h1>
    <p class="lead"><?= JText::_('COM_ROLES_CATEGORY_DETAILS_INFO'); ?></p>
</div>

<form action="<?= JRoute::_($url); ?>" method="post" name="adminForm" id="adminForm">
    <div class="form-horizontal">
        <fieldset class="adminform">
            <div class="row-fluid">
                <div class="span5">
                    <?php foreach ($this->form->getFieldset() as $field): ?>
                        <div class="control-group">
                            <div class="control-label"><?php echo $field->label; ?></div>
                            <div class="controls"><?php echo $field->input; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-md-4">
                    <h2>Categories</h2>
                    <?php foreach ($this->categories as $cat): ?>
                        <p><?= $cat[0].' - '.$cat[1]; ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-4">
                    <h2>Roles</h2>
                    <?php foreach ($this->roles as $cat): ?>
                        <p><?= $cat[0].' - '.$cat[1]; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </fieldset>
    </div>
    <input type="hidden" name="task" value="category.edit" />
    <?php echo JHtml::_('form.token'); ?>
</form>

<footer class="footer">
    <p class="component-name">Roles Management</p>
    <p class="component-author">Krzysztof Chadynka Copyright 2014</p>
</footer>