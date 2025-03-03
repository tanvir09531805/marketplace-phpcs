<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9fd1447c4b69b12217644b8479f70976
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPCSStandards\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 57,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPCSStandards\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9fd1447c4b69b12217644b8479f70976::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9fd1447c4b69b12217644b8479f70976::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9fd1447c4b69b12217644b8479f70976::$classMap;

        }, null, ClassLoader::class);
    }
}
