<?php defined('SYSPATH') or die('No direct script access.');

class Date extends Kohana_Date {
    public static function formatDate($date)
    {
        $months = array(
            1 => 'janvier',
            2 => 'février',
            3 => 'mars',
            4 => 'avril',
            5 => 'mai',
            6 => 'juin',
            7 => 'juillet',
            8 => 'août',
            9 => 'septembre',
            10 => 'octobre',
            11 => 'novembre',
            12 => 'décembre',
        );
        
        $month = date('n', strtotime($date));
        $year  = date('Y', strtotime($date));
        
        return $months[$month] . ' ' . $year;
    }
}
