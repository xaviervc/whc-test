<?php

class Calculator
{
    function add($inputs)
    {
        $total = 0;

        foreach($inputs as $inner)
        {
            $total += $inner;
        }

        return $total;
    }
}