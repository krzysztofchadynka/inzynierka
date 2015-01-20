<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewSetting extends JViewLegacy
{
    private function showErrors($errors)
    {
        if (count($errors))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
    }
    
    public function display($tpl = null) 
    {
        $this->showErrors($this->get('Errors'));
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->addToolBar();
        
        parent::display($tpl);
    }

    /**
     * Setting the toolbar
     */
    protected function addToolBar() 
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolBarHelper::title($isNew ? JText::_('COM_ROLES_MANAGER_SETTING_EDIT')
                                     : JText::_('COM_ROLES_MANAGER_SETTING_EDIT'));
        JToolBarHelper::save('setting.save');
        JToolBarHelper::cancel('setting.cancel', $isNew ? 'JTOOLBAR_CANCEL'
                                                        : 'JTOOLBAR_CLOSE');
    }
}