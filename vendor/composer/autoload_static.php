<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92dd03b915acf7ab3e08f29201045157
{
    public static $prefixesPsr0 = array (
        'N' => 
        array (
            'NeverLetMeGo' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit92dd03b915acf7ab3e08f29201045157::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
