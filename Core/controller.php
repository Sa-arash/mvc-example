<?php
namespace Core;
class controller
{
    public function __construct()
    {
        
    }
    public function Viwe($view)
    {
        require 'view/'.$view.'.php';
    }
}