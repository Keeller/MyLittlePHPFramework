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

    public static function  draw(string $path,array $vars)
    {

        $page=file_get_contents($path);



    }

}