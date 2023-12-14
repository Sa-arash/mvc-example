<?php

namespace Core;

class Router
{
    protected $url;
    protected $route;
    public function __construct()
    {
        $this->setUrl();
        $this->getUrl();
        $this->setRoute();
        $this->getRoute();
        
        var_dump( $this->url);
    }

    public function setUrl()
    {  
        $this->url = $_SERVER['REQUEST_URI'];
        if (substr($this->url, -1) == '/') {
            $this->url = substr_replace($this->url, '', -1);
        }
        if (substr($this->url, 0,1) == '/') {
            $this->url = substr_replace($this->url, '', 0,1);
        }
        echo $this->url;
        $this->url = explode('/', $this->url);
        unset($this->url[0]);
        $this->url = array_values($this->url);
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function hasParam()
    {
        if (isset($this->url[3])) {
            return true;
        } else {
            return false;
        }
    }
    public function setRoute()
    {
      $this->route = include_once('./routes/web.php');
    }
    public function getRoute()
    {
        return $this->route;
    }
}
