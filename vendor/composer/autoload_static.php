<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f1517969c60570d14f970f74c2ba9a1
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Includes\\' => 9,
        ),
        'A' => 
        array (
            'Api\\' => 4,
            'Admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
        'Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f1517969c60570d14f970f74c2ba9a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f1517969c60570d14f970f74c2ba9a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f1517969c60570d14f970f74c2ba9a1::$classMap;

        }, null, ClassLoader::class);
    }
}
