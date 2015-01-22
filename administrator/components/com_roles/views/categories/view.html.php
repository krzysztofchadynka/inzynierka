<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RolesViewCategories extends JViewLegacy
{
    protected $categories;

    private function setData()
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
    }
    
    private function displayErrors($errors)
    {
        if (count($errors))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
    }
    
    protected function addToolBar()
    {
        JToolBarHelper::title(JText::_('COM_ROLES_MANAGER_CATEGORIES'));
        JToolBarHelper::deleteList('', 'categories.delete');
        JToolBarHelper::editList('category.edit');
        JToolBarHelper::addNew('category.add');
    }

    public function display($tpl = null) 
    {
        $this->setData();
        $this->displayErrors($this->get('Errors'));
        $this->addToolBar();
        
        parent::display($tpl);
    }
}