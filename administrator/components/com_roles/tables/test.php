<?php
defined('_JEXEC') or die;

class RolesTableTest extends JTable
{
    public function __construct($db) 
    {
        parent::__construct('#__test', 'id', $db);
        
        JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_roles.note'));
    }
}

