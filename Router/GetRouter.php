<?php
/**
 * Created by PhpStorm.
 * User: kolya
 * Date: 06.07.2019
 * Time: 20:04
 */

namespace Router;


class GetRouter extends BaseRouter
{

    public function getParams()
    {
        if(isset($_GET['controller'])) {
            if (isset($_GET['action']))
            {
                $arr=[];
                foreach ($_GET as $key)
                {
                    if($key!=$_GET['controller'] && $key!=$_GET['action'])
                    {
                       array_push($arr,$key);
                    }
                }
                $params=[
                    'controller'=>$_GET['controller'],
                    'method'=>$_GET['action'],
                    'args'=>$arr
                ];
               return $params;
            }
            else
                return [];
        }
        else
            return [];
    }

}