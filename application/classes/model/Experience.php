<?php defined('SYSPATH') or die('No direct script access.');
class Model_Experience extends ORM
{
    protected $_table_names_plural = FALSE;
    protected $_sorting = array('start_date' => 'DESC');
    protected $_has_many = array('skills' => array('through' => 'experience_skill'));

}