<?php
namespace Controller;
use Base\Entity;
use View\ViewBuilder;


class BaseController extends Entity
{

    public function render($view,array $args)
    {
        $shortClassName=(new \ReflectionClass($this))->getShortName();
        $pos=stripos($shortClassName,'Controller');
        $classAllias=substr($shortClassName,0,$pos);
        $path=$_SERVER['DOCUMENT_ROOT'].'/Views/'.$classAllias.'/'.$view.'.php';
        //var_dump($path);die();
        ViewBuilder::draw($path,$args);
        return null;


    }

    public function a($id)
    {
        echo "Controller YOBANA ".$id;
        $a='world';
        return $this->render('bw',[
            'a'=>$a,
        ]);
    }
}