<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    public function display($tpl = null)
    {
        $this->info = $this->get('Info');
        
        // display the view
        parent::display($tpl);
    }
}
