<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf82c43e829eaa916f9ad28fd2f67e79b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf82c43e829eaa916f9ad28fd2f67e79b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf82c43e829eaa916f9ad28fd2f67e79b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf82c43e829eaa916f9ad28fd2f67e79b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}