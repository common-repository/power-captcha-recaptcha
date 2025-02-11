<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit100b1a041573ce880389a25c3df6c4a0
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit100b1a041573ce880389a25c3df6c4a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit100b1a041573ce880389a25c3df6c4a0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit100b1a041573ce880389a25c3df6c4a0::$classMap;

        }, null, ClassLoader::class);
    }
}
