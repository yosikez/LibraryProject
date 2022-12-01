<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit26b550a65a5bf4917f50c02799b54967
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit26b550a65a5bf4917f50c02799b54967', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit26b550a65a5bf4917f50c02799b54967', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit26b550a65a5bf4917f50c02799b54967::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}