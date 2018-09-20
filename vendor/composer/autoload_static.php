<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit216a3faef2a3dc340377a31c8686eca6
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lynq\\Router\\' => 12,
            'Lynq\\Entity\\' => 12,
            'Lynq\\Core\\' => 10,
        ),
        'A' => 
        array (
            'Api\\Models\\' => 11,
            'Api\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lynq\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/projectair/cqured/router',
        ),
        'Lynq\\Entity\\' => 
        array (
            0 => __DIR__ . '/..' . '/projectair/cqured/entity',
        ),
        'Lynq\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/projectair/cqured/core',
        ),
        'Api\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/models',
        ),
        'Api\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/controllers',
        ),
    );

    public static $classMap = array (
        'Api\\Controllers\\MediaController' => __DIR__ . '/../..' . '/api/controllers/MediaController.php',
        'Api\\Controllers\\ValuesController' => __DIR__ . '/../..' . '/api/controllers/ValuesController.php',
        'Api\\Models\\AuthenticationModel' => __DIR__ . '/../..' . '/api/models/AuthenticationModel.php',
        'Api\\Models\\PracticeModel' => __DIR__ . '/../..' . '/api/models/PracticeModel.php',
        'Lynq\\Core\\Controller' => __DIR__ . '/..' . '/projectair/cqured/core/Controller.php',
        'Lynq\\Core\\Legacy' => __DIR__ . '/..' . '/projectair/cqured/core/Legacy.php',
        'Lynq\\Core\\Programe' => __DIR__ . '/..' . '/projectair/cqured/core/Program.php',
        'Lynq\\Core\\Render' => __DIR__ . '/..' . '/projectair/cqured/core/Render.php',
        'Lynq\\Entity\\EntityModel' => __DIR__ . '/..' . '/projectair/cqured/entity/EntityModel.php',
        'Lynq\\Entity\\MiddleWare' => __DIR__ . '/..' . '/projectair/cqured/entity/MiddleWare.php',
        'Lynq\\Entity\\Session' => __DIR__ . '/..' . '/projectair/cqured/entity/Session.php',
        'Lynq\\Router\\ActivatedRoute' => __DIR__ . '/..' . '/projectair/cqured/router/ActivatedRoute.php',
        'Lynq\\Router\\Node' => __DIR__ . '/..' . '/projectair/cqured/router/Node.php',
        'Lynq\\Router\\Routes' => __DIR__ . '/..' . '/projectair/cqured/router/Routes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit216a3faef2a3dc340377a31c8686eca6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit216a3faef2a3dc340377a31c8686eca6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit216a3faef2a3dc340377a31c8686eca6::$classMap;

        }, null, ClassLoader::class);
    }
}
