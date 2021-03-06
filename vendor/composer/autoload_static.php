<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0de12d9980d1a89a6030bcc9c66080ca
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0de12d9980d1a89a6030bcc9c66080ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0de12d9980d1a89a6030bcc9c66080ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0de12d9980d1a89a6030bcc9c66080ca::$classMap;

        }, null, ClassLoader::class);
    }
}
