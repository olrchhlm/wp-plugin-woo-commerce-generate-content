<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a045d92bf325fb96c0435c90dc7d054
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a045d92bf325fb96c0435c90dc7d054::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a045d92bf325fb96c0435c90dc7d054::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}