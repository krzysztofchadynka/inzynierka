<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    public function display($tpl = null)
    {
        // assign data to teh view
        $this->msg = $this->get('Msg');
        
        // check for errors
        if (count($errors = $this->get('Errors')))
        {
            JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
            return false;
        }
        
        // display the view
        parent::display($tpl);
    }
}