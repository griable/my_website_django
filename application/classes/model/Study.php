<?php defined('SYSPATH') or die('No direct script access.');
class Model_Study extends ORM
{
    protected $_table_names_plural = FALSE;
    protected $_sorting = array('year' => 'DESC');
    protected $_has_many = array('skills' => array('through' => 'study_skill'));

}