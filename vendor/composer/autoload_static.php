<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae45fa732083eeff9d81283d9c43634b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae45fa732083eeff9d81283d9c43634b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae45fa732083eeff9d81283d9c43634b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}