<?php defined ('_JEXEC') or die('Restricted access'); ?>

<div id="com_roles_site" class="jumbotron">
    <?php if (!$this->is_guest): ?>
        <?php $cat_count = count($this->categories); ?>
        <div id="left">
            <div id="com_roles_site_header">
                <h2><?= JText::_($this->info[0]['header']); ?></h2>
                <p><?= JText::_($this->info[0]['description']); ?></p>
            </div>
            <div id="com_roles_site_info">
                <p><?= JText::_($this->info[0]['user_info']); ?>: <strong><?= $this->username; ?></strong></p>
                <p><?= JText::_($this->info[0]['role_info']); ?>: <strong><?= $this->userrole; ?></strong></p>
                <p><?= JText::_($this->info[0]['categories_info']); ?>:</p>
                <ul>
                <?php for ($i = 0; $i < $cat_count; $i++): ?>
                    <li><?= $this->categories[$i]['title']; ?></li>
                <?php endfor; ?>
                </ul>
            </div>
        </div>
        <div id="right">
            <img src="<?= $this->info[0]['image']; ?>" />
        </div>
   <?php else: ?>
        <div id="com_roles_site_header">
            <h2><?= JText::_('COM_ROLES_INFO_NOT_LOGGED_USER'); ?></h2>
            <?= $this->login_form; ?>
        </div>
    <?php endif; ?>
</div>