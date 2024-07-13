<?php

class EmployeeNames
{
    public static function unique_names($array1, $array2)
    {
     
        $combined = array_merge($array1, $array2);
        
        $unique = array_unique($combined);
        
      
        return $unique;
    }
}

$empnames = EmployeeNames::unique_names(["jack", "marwan", "balato"], ["balato", "arniel", "Ivana"]);

echo join(', ', $empnames); 