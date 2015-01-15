<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    private function getData()
    {
        $this->info = $this->get('Info');
        $this->username = $this->get('Username');
        $this->userrole = $this->get('Userrole');
        $this->is_guest = $this->get('isGuest');
        $this->login_form = $this->get('LoginForm');
        //$this->categories = $this->get("Categories");
    }
    
    public function display($tpl = null)
    {
        $this->getData();
        
        // display the view
        parent::display($tpl);
    }
}
