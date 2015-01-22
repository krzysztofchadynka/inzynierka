<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewUser extends JViewLegacy
{
    public function display($tpl = null) 
    {
        if (count($errors = $this->get('Errors'))) 
        {
                JError::raiseError(500, implode('<br />', $errors));
                return false;
        }
        
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->roles = $this->get('Roles');
        $this->users = $this->get('Users');
        $this->addToolBar();
        parent::display($tpl);
    }
    
    protected function addToolBar() 
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolBarHelper::title($isNew ? JText::_('COM_ROLES_MANAGER_USER_NEW')
                                     : JText::_('COM_ROLES_MANAGER_USER_NEW'));
        JToolBarHelper::save('user.save');
        JToolBarHelper::cancel('user.cancel', $isNew ? 'JTOOLBAR_CANCEL'
                                                    : 'JTOOLBAR_CLOSE');
    }
}