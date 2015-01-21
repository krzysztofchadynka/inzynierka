<?php
defined('_JEXEC') or die;

class RolesTableUser extends JTable
{
    public function __construct($db) 
    {
        parent::__construct('#__roles_user', 'id', $db);
        
        JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_roles.note'));
    }
}