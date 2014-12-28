<?php
defined ('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    function display($tpl = null)
    {
        // get data from the model
        $items = $this->get('Items');
        $pagination = $this->get('Pagination');
        
        // check for errors
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        // assign data to the view
        $this->items = $items;
        $this->pagination = $pagination;
        
        // display the template
        parent::display($tpl);
    }
}