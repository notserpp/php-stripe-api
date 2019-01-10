<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb96d287e43f6c81cff7ce9ad0de938f5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb96d287e43f6c81cff7ce9ad0de938f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb96d287e43f6c81cff7ce9ad0de938f5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
