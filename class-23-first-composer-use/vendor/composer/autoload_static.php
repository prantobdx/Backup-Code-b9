<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit196c17937b55c1315d2666514eeb1dff
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit196c17937b55c1315d2666514eeb1dff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit196c17937b55c1315d2666514eeb1dff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit196c17937b55c1315d2666514eeb1dff::$classMap;

        }, null, ClassLoader::class);
    }
}
