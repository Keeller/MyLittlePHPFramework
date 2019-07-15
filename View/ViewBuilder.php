<?php
/**
 * Created by PhpStorm.
 * User: kolya
 * Date: 07.07.2019
 * Time: 21:16
 */
namespace View;

use Base\Entity;

class ViewBuilder extends Entity
{

    public static function  draw(string $path,array &$vars)
    {
        extract($vars,EXTR_OVERWRITE);
        //var_dump($path);die();
        require_once $path;

    }

}