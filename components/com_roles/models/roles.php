<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modelitem');

class RolesModelRoles extends JModelItem
{
    protected $msg;
    
    public function getMsg()
    {
        if (!isset($this->msg)) 
        {
            $jinput = JFactory::getApplication()->input;
            $id = $jinput->get('id', 1, 'INT');
            
            switch($id)
            {
                default:
                case 1:
                    $this->msg = 'Users management';
                    break;
                case 2:
                    $this->msg = 'Roles management';
                    break;
            }
        }
        
        return $this->msg;
    }
}

