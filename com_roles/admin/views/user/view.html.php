<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewUser extends JViewLegacy
{
    public function display($tpl = null) 
    {
        // get the Data
        $form = $this->get('Form');
        $item = $this->get('Item');
        
        // check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        // assign the Data
        $this->form = $form;
        $this->item = $item;
        
        // set the toolbar
        $this->addToolBar();
        
        parent::display($tpl);
    }
    
    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolbarHelper::title($isNew ? JText::_('COM_ROLES_MANAGER_USER_NEW') : JText::_('COM_ROLES_MANAGER_USER_EDIT'));
        JToolbarHelper::save('user.save');
        JToolbarHelper::cancel('user.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}