<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRole extends JViewLegacy
{
    public function display($tpl = null) 
    {
        // get the data
        $form = $this->get('Form');
        $item = $this->get('Item');
        
        // Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        // assign the data
        $this->form = $form;
        $this->item = $item;
        
        // set the toolbar
        $this->addToolBar();
        
        // display the template
        parent::display($tpl);
    }
    
    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        
        JToolbarHelper::title($isNew ? JText::_('COM_ROLES_MANAGER_ROLE_NEW') : JText::_('COM_ROLES_MANAGER_ROLE_EDIT'));
    }
}