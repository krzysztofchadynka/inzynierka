<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewTest extends JViewLegacy
{
    protected $form;

    public function display($tpl = null) 
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        
        // check for errors
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        $this->addToolBar();
        
        parent::display($tpl);
    }
    
    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolBarHelper::title($isNew ? JText::_('COM_ROLES_MANAGER_TEST_NEW')
                                    : JText::_('COM_ROLES_MANAGER_TEST_EDIT'));
       JToolBarHelper::save('test.save');
       JToolBarHelper::cancel('test.cancel', $isNew ? 'JTOOLBAR_CANCEL'
                                                    : 'JTOOLBAR_CLOSE');
    }
}