<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1b9ce816b84d8405b7eced000f3994e
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc1b9ce816b84d8405b7eced000f3994e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc1b9ce816b84d8405b7eced000f3994e::$classMap;

        }, null, ClassLoader::class);
    }
}
