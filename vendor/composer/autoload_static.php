<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff71ee588dc42b324b1cf2f82bc0773b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff71ee588dc42b324b1cf2f82bc0773b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff71ee588dc42b324b1cf2f82bc0773b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
