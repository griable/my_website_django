<?php defined('SYSPATH') or die('No direct script access.');
class Model_Project extends ORM
{
    protected $_table_names_plural = FALSE;
    protected $_sorting = array('date' => 'DESC');
    protected $_has_many = array('skills' => array('through' => 'project_skill'));
    
    public function get_previous()
    {
        return ORM::factory('project')
                   ->where('date', '<', $this->date)
                   ->order_by('date', 'desc')
                   ->limit(1)
                   ->find();
    }
    
    public function get_next()
    {
        return ORM::factory('project')
                   ->where('date', '>', $this->date)
                   ->order_by('date', 'asc')
                   ->limit(1)
                   ->find();
    }
}