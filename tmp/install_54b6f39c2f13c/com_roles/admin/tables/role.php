<?php
defined('_JEXEC') or die;

class RolesTableRole extends JTable
{
    public function __construct($db) 
    {
        parent::__construct('#__roles_role', 'role_id', $db);
        
        JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_roles.note'));
    }
}