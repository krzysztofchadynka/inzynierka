<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');

class RolesController extends JControllerLegacy
{
    function display($cachable = false, $urlparams = false)
    {
        // call default view if not set
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'Roles'));
        
        // call parent behavior
        parent::display($cachable, $urlparams);
        
        //RolesHelper::addSubmenu('messages');
    }
}

