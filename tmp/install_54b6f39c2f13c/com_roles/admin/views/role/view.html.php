<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewRole extends JViewLegacy
{
    protected $form, $item, $categories;
    
    public function display($tpl = null) 
    {
        // Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        // assign the data
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->categories = $this->get('Categories');
        
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
        JToolbarHelper::save('role.save');
        JToolbarHelper::cancel('role.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}