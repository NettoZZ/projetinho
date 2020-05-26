<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1759001f9cb8023e31ff6cae999300f6
{
    public static $prefixLengthsPsr4 = array (
        '.' => 
        array (
            '.\\' => 2,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '.\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1759001f9cb8023e31ff6cae999300f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1759001f9cb8023e31ff6cae999300f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
