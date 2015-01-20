<?php
defined('_JEXEC') or die;

class RolesTableInfo extends JTable
{
    public function __construct($db) 
    {
        parent::__construct('#__roles_info', 'id', $db);
        
        JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_roles.note'));
    }
}