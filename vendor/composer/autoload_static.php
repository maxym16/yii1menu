<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd076848c5bcdb1bbba1ea39ab3861570
{
    public static $classMap = array (
        'Yii' => __DIR__ . '/../..' . '/framework/yii.php',
        'YiiBase' => __DIR__ . '/../..' . '/framework/YiiBase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd076848c5bcdb1bbba1ea39ab3861570::$classMap;

        }, null, ClassLoader::class);
    }
}
