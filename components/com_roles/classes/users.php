<?php
defined ('_JEXEC') or die('Restricted access');
require_once(JPATH_COMPONENT_SITE.'\classes\user.php');

class Users
{
    private $list;
    
    public function __construct() 
    {
        $this->list = array();
        
        foreach ($this->allUsers() as $user)
            array_push($this->list, new User($user->id, $user->name));
    }
    
    private function allUsers()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('id, username')->from('#__users');
        
        return $query;
    }
    
    public function getAllUsers()
    {
        return $this->list;
    }
}