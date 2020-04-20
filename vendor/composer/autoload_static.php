<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2013cbc191fc9053f9e0c69b88c9c2d2
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Codebird\\Codebird' => __DIR__ . '/..' . '/jublonet/codebird-php/src/codebird.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2013cbc191fc9053f9e0c69b88c9c2d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2013cbc191fc9053f9e0c69b88c9c2d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2013cbc191fc9053f9e0c69b88c9c2d2::$classMap;

        }, null, ClassLoader::class);
    }
}
