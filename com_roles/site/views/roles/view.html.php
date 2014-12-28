<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    public function display($tpl = null)
    {
        // asiign data to the view
        $this->msg = 'Hello World';
        
        // display the view
        parent::display($tpl);
    }
}
