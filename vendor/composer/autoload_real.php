<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdc5ad059b203490d82e0d51d4b5fda32
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

        spl_autoload_register(array('ComposerAutoloaderInitdc5ad059b203490d82e0d51d4b5fda32', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdc5ad059b203490d82e0d51d4b5fda32', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdc5ad059b203490d82e0d51d4b5fda32::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
