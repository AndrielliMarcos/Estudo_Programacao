<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02cdfb3bbfaa4912155d5beb6b09366e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit02cdfb3bbfaa4912155d5beb6b09366e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02cdfb3bbfaa4912155d5beb6b09366e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
