<?php
/**
 * Created by PhpStorm.
 * User: kolya
 * Date: 06.07.2019
 * Time: 20:46
 */

namespace Base;


use Router\GetRouter;

class MyFrameMain extends Entity
{

    public function run()
    {
        $getRouter=new GetRouter();
        $arr=$getRouter->getParams();
        $getRouter->route($arr);
    }

}