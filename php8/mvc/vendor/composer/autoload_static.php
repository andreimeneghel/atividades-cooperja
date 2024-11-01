<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb61f17f3ef6248bfe8f4e78bd59fa65f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb61f17f3ef6248bfe8f4e78bd59fa65f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb61f17f3ef6248bfe8f4e78bd59fa65f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb61f17f3ef6248bfe8f4e78bd59fa65f::$classMap;

        }, null, ClassLoader::class);
    }
}
