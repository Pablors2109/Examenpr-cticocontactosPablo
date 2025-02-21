<?php
namespace Formacom\Core;
// app/core/Controller.php
abstract class Controller
{
    abstract public function index(...$params);

    public function view($view, $data = [])
    {
        $controllerFullName = get_class($this);
        $parts = explode('\\', $controllerFullName);
        $className = end($parts);
        $controllerName = strtolower(str_replace("Controller", "", $className));
        require_once './app/views/'.$controllerName.'/'. $view . '.php';
    }
}
