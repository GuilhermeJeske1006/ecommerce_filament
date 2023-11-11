<?php

namespace App\Helpers;


class Helper
{

    public static function somente_numeros(String $telefone)
    {
        return preg_replace("/[^0-9]/", "", $telefone);
    }
    
    public static function format_int($val)
    {
        $val = number_format($val, 0, ',', '.');
        
        return $val;
    }

    public static function formatDate($date)
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        return strftime('%B %d, %Y', strtotime($date));
    }
}
