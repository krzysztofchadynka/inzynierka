<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewCategory extends JViewLegacy
{
    public function display($tpl = null) 
    {
        $form = $this->get('Form');
        $item = $this->get('Item');
        
        if (count($errors = $this->get('Errors'))) 
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        $this->form = $form;
        $this->item = $item;
        $this->categories = $this->get('Categories');
        $this->roles = $this->get('Roles');
        
        $this->addToolBar();
        
        parent::display($tpl);
    }
    
    protected function addToolBar() 
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolBarHelper::title($isNew ? JText::_('COM_ROLES_MANAGER_CATEGORY_NEW')
                                     : JText::_('COM_ROLES_MANAGER_CATEGORY_EDIT'));
        JToolBarHelper::save('category.save');
        JToolBarHelper::cancel('category.cancel', $isNew ? 'JTOOLBAR_CANCEL'
                                                           : 'JTOOLBAR_CLOSE');
    }
}