<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit059336d93a96b2f6e06ab81c81339d30
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit059336d93a96b2f6e06ab81c81339d30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit059336d93a96b2f6e06ab81c81339d30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}