<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modellist');
jimport('joomla.application.component.modelitem');

define("UM", "COM_ROLES_USER_MANAGEMENT_HEADER");
define("RM", "COM_ROLES_ROLES_MANAGEMENT_HEADER");

class RolesModelRoles extends JModelList
{
    protected $msg;
    
    private function setAction($id)
    {
        switch ($id)
        {
            case 2:
                $this->msg = RM;
                break;

            default:
            case 1:
                $this->msg = UM;
                break;
        }
    }
    
    public function getMsg()
    {
        if (!isset($this->msg))
            $this->setAction(JFactory::getApplication()->input->get('id', 1, 'INT'));
        
        return $this->msg;
    }
    
    protected function getListQuery()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('id, username')->from('#__users');
        
        return $query;
    }
}