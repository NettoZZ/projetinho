<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87e936d9d5033719d908df4318dc800b
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit87e936d9d5033719d908df4318dc800b::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
