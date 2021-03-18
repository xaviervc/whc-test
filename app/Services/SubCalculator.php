<?php
require_once 'Calculator.php';

class SubCalculator extends Calculator{
    
    public function subtract($numbers)
    {
        $firstNumber = $numbers[0] ?? '';

        if($firstNumber == '')
            return false;
        
        $total = $firstNumber;

        for($i = 1; $i < count($numbers); $i++)
        {
            $total -= $numbers[$i];
        }
        return $total;
    }

}