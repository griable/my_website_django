<?php defined('SYSPATH') or die('No direct script access.');
class Model_Skill extends ORM
{
    protected $_table_names_plural = FALSE;
    protected $_has_many = array(
        'studies' => array('through' => 'study_skill'),
        'experiences' => array('through' => 'experience_skill')
    );
}