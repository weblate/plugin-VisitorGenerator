<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit150f3641fba2aa7f9c7e1c8d776f657c
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit150f3641fba2aa7f9c7e1c8d776f657c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit150f3641fba2aa7f9c7e1c8d776f657c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit150f3641fba2aa7f9c7e1c8d776f657c::$classMap;

        }, null, ClassLoader::class);
    }
}
