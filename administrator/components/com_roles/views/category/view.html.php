<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewCategory extends JViewLegacy
{
    private function assignData()
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
    }
    
    private function checkForErrors($errors)
    {
        if (count($errors))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
    }
    
    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        
        JToolbarHelper::title($isNew ? JText::_('COM_ROLES_MANAGER_CATEGORY_NEW') 
                : JText::_('COM_ROLES_MANAGER_CATEGORY_EDIT'));
        JToolbarHelper::save('category.save');
        JToolbarHelper::cancel('category.cancel', $isNew ? 'JTOOLBAR_CANCEL' 
                : 'JTOOLBAR_CLOSE');
    }
}