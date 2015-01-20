<?php
defined('_JEXEC') or die;

abstract class RolesHelper
{
    public static function addSubmenu($submenu)
    {
        JSubMenuHelper::addEntry(JText::_('COM_ROLES_SUBMENU_MESSAGES'),
                'index.php?option=com_roles', $submenu == 'messages');
        JSubMenuHelper::addEntry(JText::_('COM_ROLES_SUBMENU_CATEGORIES'),
                'index.php?option=com_categories&view=categories&extension=com_roles',
                $submenu == 'categories');
        
        $document = JFactory::getDocument();
        
        if ($submenu == 'categories')
        {
            $document->setTitle(JText::_('COM_ROLES_ADMINISTRATION_CATEGORIES'));
        }
    }
}