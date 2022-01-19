<?php
namespace App;


class FizzBuzz
{
   public function getFizzBuzz($number)
    {
        if ($number % 3 ==0 && $number % 5 == 0) {
            return "FizzBuzz";
        } 
        if (($number % 3 == 0) or (strpos($number, 3)) !== false) {
            return "Fizz";
        } 
        if (($number % 5 == 0) or (strpos($number, 5)) !== false) {
            return "Buzz";
        }         
        return $number;
                   
    }

}


?>