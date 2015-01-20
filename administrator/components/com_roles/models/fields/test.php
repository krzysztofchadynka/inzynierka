<?php
defined('JPATH_BASE') or die;
JFormHelper::loadFieldClass('list');

class JFormFieldTest extends JFormFieldList
{
    /**
     * The field type.
     *
     * @var		string
     */
    protected $type = 'Test';

    /**
     * Method to get a list of options for a list input.
     *
     * @return	array		An array of JHtml options.
     */
    protected function getOptions() 
    {
            $db = JFactory::getDBO();

            /// $query = new JDatabaseQuery; WARNING - There's an error in this line, JDatabaseQuery is an abstract class
            $query = $db->getQuery(true); // THIS IS THE FIX, WARNING IT MUST BE FIXED IN THE ZIP FILES

            $query->select('#__test.id as id,name,#__categories.title as cat_title, category');
            $query->from('#__test');
            $query->leftJoin('#__categories on category=#__categories.id');
            $db->setQuery((string)$query);
            $messages = $db->loadObjectList();
            $options = array();
            if ($messages)
            {
                    foreach($messages as $message) 
                    {
                            $options[] = JHtml::_('select.option', $message->id, $message->name .
                                                  ($message->category ? ' (' . $message->category . ')' : ''));
                    }
            }
            $options = array_merge(parent::getOptions(), $options);
            return $options;
    }
}