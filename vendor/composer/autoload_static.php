<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit547409f047434b7050883a3280e5d7e6
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
        'B' => 
        array (
            'Base\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/View',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Router',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
        'Base\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Base',
        ),
    );

    public static $classMap = array (
        'Base\\Entity' => __DIR__ . '/../..' . '/Base/Entity.php',
        'Base\\MyFrameMain' => __DIR__ . '/../..' . '/Base/MyFrameMain.php',
        'Controller\\BaseController' => __DIR__ . '/../..' . '/Controller/BaseController.php',
        'Router\\BaseRouter' => __DIR__ . '/../..' . '/Router/BaseRouter.php',
        'Router\\GetRouter' => __DIR__ . '/../..' . '/Router/GetRouter.php',
        'View\\ViewBuilder' => __DIR__ . '/../..' . '/View/ViewBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit547409f047434b7050883a3280e5d7e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit547409f047434b7050883a3280e5d7e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit547409f047434b7050883a3280e5d7e6::$classMap;

        }, null, ClassLoader::class);
    }
}
