<?php
use GuzzleHttp\Client;

require_once 'Constants/Commands.php';
require_once 'Services/SubCalculator.php';
require_once 'Services/Validator.php';

class AppService
{
    private $validator;
    private $calculator;
    private $client;

    public function __construct()
    {
        $this->validator = new Validator();
        $this->calculator = new SubCalculator();
        $this->client = new Client(['base_uri' => 'https://api.github.com/repos/']);
    }

    public function getMethod($input)
    {
        $inputArray = explode(" ", $input);
        $valid = $this->validator->validateMethod($inputArray[0] ?? '');
        return $valid ? $inputArray[0] : ['errors' => ['Invalid Method']];
    }

    public function getArgs($input)
    {
        $inputArray = explode(" ", $input);
        return array_slice($inputArray, 1) ?? '';
    }

    public function doMethod($method, $args)
    {
        if(Commands::Add() === $method)
        {
            if($this->validator->validateNumbers($args))
            {
                return ['success' => [$this->calculator->add($args)]];
            }

            return ['errors' => ['Invalid arguments for addition.']];
        }

        if(Commands::Subtract() === $method)
        {
            if($this->validator->validateNumbers($args))
            {
                return ['success' => [$this->calculator->subtract($args)]];
            }

            return ['errors' => ['Invalid arguments for Subtraction.']];
        }

        if(Commands::SortAsc() === $method)
        {
            if(count($args) < 1 || !$this->validator->areInputsEmptyOrSpaces($args))
                return ['errors' => ['Invalid arguments to sort.']];
            
            sort($args);
            return $args;
        }

        if(Commands::RepoDesc() === $method)
        {
            $query = implode('/', $args);

            try{
                $response = $this->client->get($query);
            }
            catch(Exception $e)
            {
                return ['errors' => ['Github user or repository not found']];
            }

            if($response->getStatusCode() != 200)
                return ['errors' => ['Github user or repository not found']];

            return ['successRepo' => (string) $response->getBody()];
        }
    }

}