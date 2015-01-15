<?php defined ('_JEXEC') or die('Restricted access'); ?>
<pre>
    <?php print_r($this->info); ?>
</pre>
<div id="com_roles_site">
    <div id="com_roles_site_header">
        <h2><?= JText::_($this->info[0]['header']); ?></h2>
        <p><?= JText::_($this->info[0]['description']); ?></p>
    </div>
    <div id="com_roles_site_info">
        <p><?= JText::_($this->info[0]['user_info']); ?>: <strong><?= $this->username; ?></strong></p>
        <p><?= JText::_($this->info[0]['role_info']); ?>: <strong><?= $this->userrole; ?></strong></p>
    </div>
</div>