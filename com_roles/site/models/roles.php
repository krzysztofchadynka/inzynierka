<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modelitem');
jimport( 'joomla.application.module.helper' );

class RolesModelRoles extends JModelItem
{   
    private $user;
    protected $username, $userrole, $categories, $is_guest,
            $login_form;
    
    public function __construct($config = array()) 
    {
        $this->user = JFactory::getUser();
        
        parent::__construct($config);
    }
    
    public function getInfo()
    {
        $db = JFactory::getDBO();
        $query = "SELECT * FROM #__roles_info";
        $db->setQuery($query);
        
        return $db->loadAssocList();
    }
    
    public function getUserrole()
    {
        $db = JFactory::getDBO();
        $query = "SELECT r.name FROM #__roles_role r "
                . "LEFT JOIN #__roles_user ru "
                . "ON ru.role_id=r.role_id "
                . "WHERE ru.user_id=".$this->user->id;
        $db->setQuery($query);
        
        return $db->loadResult();
    }
    
    private function getRoleID()
    {
        $db = JFactory::getDBO();
        $query = "SELECT role_id FROM #__roles_user "
                . "WHERE user_id=".$this->user->id;
        $db->setQuery($query);
        
        return $db->loadResult();
    }
    
    public function getCategories()
    {
        $db = JFactory::getDBO();
        $query = "SELECT c.title FROM #__categories c "
                . "LEFT JOIN #__roles_categories rc "
                . "ON rc.category_id=c.id "
                . "AND rc.role_id=".$this->getRoleID();
        $db->setQuery($query);
        
        return $db->loadAssocList();
    }
    
    public function getUsername()
    {
        return $this->user->name.' ('.$this->user->username.')';
    }
    
    public function getisGuest()
    {
        if ($this->user->guest)
            return true;
        
        return false;
    }
    
    public function getLoginForm()
    {
        $module = JModuleHelper::getModule( 'login', '' );
        return JModuleHelper::renderModule($module); 
    }
}