<?php
/**
 * Created by PhpStorm.
 * User: kolya
 * Date: 06.07.2019
 * Time: 1:47
 */

namespace Router;

//require 'C:\ops\OSPanel\domains\MyFrameWork\Base\Entity.php';

use Base\Entity;
use ReflectionMethod;
//use Controller\BaseController;

class BaseRouter extends Entity
{
    private $controller;
    private $method;
    private $args=[];


    public function route(array $params)
    {
        if(isset($params))
        {
            $this->controller='Controller\\'.$params['controller'];
            $this->method=$params['method'];
            $this->args=$params['args'];




        }

        $b=$this->controller;
        //var_dump($this->method); die();

        if(class_exists($this->controller)) {
            if(method_exists($this->controller,$this->method)) {
                $reflectionMethod = new ReflectionMethod($b, $this->method);
                $controller_exec = new  $b;
            }
            else
            {
                throw new \Exception('Method '.$this->method.' not found in '.$this->controller.' class');
            }
        }
        else {
            throw new \Exception('Undefended class '.$this->controller);
        }
        return $reflectionMethod->invokeArgs($controller_exec,$this->args);

    }

}