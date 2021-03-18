<?php

//Register New Commands Here
class Commands
{
    public static function Add() { return 'add' ;}
    public static function Subtract() { return 'subtract' ;}
    public static function SortAsc() { return 'sort-asc' ;}
    public static function RepoDesc() { return 'repo-desc' ;}

    public static $commands = ['add', 'subtract', 'sort-asc', 'repo-desc'];
}