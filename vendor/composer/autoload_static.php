<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f2b175f0e296482e8caffaf461b220e
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f2b175f0e296482e8caffaf461b220e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f2b175f0e296482e8caffaf461b220e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
