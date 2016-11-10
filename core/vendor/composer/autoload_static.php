<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc47b51d0c44a2faf7fbdb5b72871475b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Cron' => 
            array (
                0 => __DIR__ . '/..' . '/mtdowling/cron-expression/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc47b51d0c44a2faf7fbdb5b72871475b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc47b51d0c44a2faf7fbdb5b72871475b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc47b51d0c44a2faf7fbdb5b72871475b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}