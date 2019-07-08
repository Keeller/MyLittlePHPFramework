<?php
namespace Controller;
use Base\Entity;


class BaseController extends Entity
{

    public function a($id)
    {
        echo "Controller YOBANA ".$id;
        return "xy";
    }
}