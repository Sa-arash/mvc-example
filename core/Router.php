<?php

namespace Core;

use App\controller\indexcontroller;

class Router
{

    protected $url;
    protected $route;
    protected $action;
    protected $nameSpace='\App\controller\\';
    public function __construct()
    {
        $this->setUrl();
        $this->getUrl();
        $this->setRoute();
        $this->getRoute();
        $this->validation();
    }
    public function render($action)
    {
        $actions = explode('@',$action['action']);
        $controller = $this->nameSpace.$actions[0];
        $method = $actions[1];
        // echo($controller);
        (new $controller())->$method();
    }
    public function validation()
    {
        // var_dump($this->route);
        // echo "<br>";
        // var_dump($this->url);
        // echo "<br>";
        if (isset($this->url[0])) {
            if (array_key_exists('/' . $this->url[0], $this->route)) {
                return $this->render($this->route['/'.$this->url[0]]);
            } else {
                echo '404';
            }
        } elseif (array_key_exists('/', $this->route)) {
            return $this->render($this->route['/']);
        } else {
            echo '404';
        }
    }
    public function setUrl()
    {
        $this->url = $_SERVER['REQUEST_URI'];
        if (substr($this->url, -1) == '/') {
            $this->url = substr_replace($this->url, '', -1);
        }
        if (substr($this->url, 0, 1) == '/') {
            $this->url = substr_replace($this->url, '', 0, 1);
        }
        // echo $this->url;
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
