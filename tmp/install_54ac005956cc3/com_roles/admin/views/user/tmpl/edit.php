<?php
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>

<?php $url = 'index.php?option=com_roles&layout=edit&id='.(int)$this->item->id; ?>

<form action="<?= JRoute::_($url); ?>" method="post" name="adminForm" id="adminForm">
    <div class="form-horizontal">
        <fieldset class="adminform">
            <legend><?= JText::_('COM_ROLES_USER_DETAILS'); ?></legend>
            <div class="row-fluid">
                <div class="span6">
                    <?php foreach ($this->form->getFieldset() as $field): ?>
                        <div class="control-group">
                            <div class="control-label"><?= $field->label; ?></div>
                            <div class="controls"><?= $field->input; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </fieldset>
    </div>
    <input type="hidden" name="task" value="user.edit" />
    <?= JHtml::_('form.token'); ?>
</form>