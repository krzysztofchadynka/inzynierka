<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRoles extends JViewLegacy
{
    public function display($tpl = null) 
    {
        // get the data
        $form = $this->get('Form');
        $item = $this->get('Item');
        
        // check for errors
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        // assign the data
        $this->form = $form;
        $this->item = $item;
     
        
        
        parent::display($tpl);
    }
    
    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolbarHelper::save('roles.save');
        JToolbarHelper::cancel('roles.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}