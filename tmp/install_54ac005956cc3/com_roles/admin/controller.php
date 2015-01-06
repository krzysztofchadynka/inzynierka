<?php
defined ('_JEXEC') or die('Restricted access');

class RolesController extends JControllerLegacy
{
    function display($cachable = false, $urlparams = false)
    {
        // call default view if not set
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'Users'));
        
        // call parent behavior
        parent::display($cachable);
    }
}

