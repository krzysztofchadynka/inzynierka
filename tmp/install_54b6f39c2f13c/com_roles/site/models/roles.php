<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modelitem');

class RolesModelRoles extends JModelItem
{
    protected $header, $description, $image, $user_info, $role_info;
    protected $info = array();
    
    private function addInfoToArray($results)
    {
        foreach ($results as $item)
        {
            array_push($this->info, $item->header, $item->description, $item->image, $item->user_info, $item->role_info);
        }
    }
    
    private function GetInformation()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('*')->from('#__roles_info');
        $db->setQuery($query);
        $results = $db->query();
        
        $this->addInfoToArray($results);
    }
    
    public function getInfo()
    {
        $this->GetInformation();
        
        return $this->info;
    }
}