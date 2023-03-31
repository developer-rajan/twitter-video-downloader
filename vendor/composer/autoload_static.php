<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7514775d9a6ccfc56371ca3cda461461
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TwitterVideoDownloader\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TwitterVideoDownloader\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7514775d9a6ccfc56371ca3cda461461::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7514775d9a6ccfc56371ca3cda461461::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7514775d9a6ccfc56371ca3cda461461::$classMap;

        }, null, ClassLoader::class);
    }
}