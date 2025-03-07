<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2393afed0a1020cf008a243940025099
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braspin\\NoCss\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braspin\\NoCss\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2393afed0a1020cf008a243940025099::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2393afed0a1020cf008a243940025099::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2393afed0a1020cf008a243940025099::$classMap;

        }, null, ClassLoader::class);
    }
}
