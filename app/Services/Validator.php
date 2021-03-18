<?php
require_once './Constants/Commands.php';
class Validator
{
    public function validateMethod($input)
    {
        switch($input)
        {
            case Commands::Add():
                return true;
                break;
            case Commands::Subtract():
                return true;
                break;
            case Commands::SortAsc():
                return true;
                break;
            case Commands::RepoDesc():
                return true;
                break;
            default:
                return false;
                break;
        }
    }

    public function validateNumbers($numbers)
    {
        if(!(count($numbers) > 1))
        {
            return false;
        }

        foreach($numbers as $number)
        {
            if(!is_numeric($number))
            {
                return false;
            }
        }

        return true;
    }

    public function areInputsEmptyOrSpaces($inputs)
    {
        foreach($inputs as $input)
        {
            if($input == ' ' || $input == '')
            {
                return false;
            }
        }

        return true;
    }
}