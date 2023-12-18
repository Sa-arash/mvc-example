<?php 
namespace App\controller;
use Core\controller;

class indexcontroller extends controller
{
   
    public function index()
    {
      $this->Viwe('saman');
    }
    public function about()
    {
      $this->Viwe('about');
    }
}