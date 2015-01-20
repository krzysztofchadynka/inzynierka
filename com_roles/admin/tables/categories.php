<?php
defined('_JEXEC') or die;

class RolesTableRolesCategories extends JTable
{
    public function __construct($db) 
    {
        parent::__construct('#__roles_categories', 'id', $db);
        
        JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_roles.note'));
    }
}