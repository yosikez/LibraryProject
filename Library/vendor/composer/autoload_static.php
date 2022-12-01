<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26b550a65a5bf4917f50c02799b54967
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lib\\App\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lib\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Lib\\App\\Controller\\BookController' => __DIR__ . '/../..' . '/App/Controller/BookController.php',
        'Lib\\App\\Controller\\LibrarianController' => __DIR__ . '/../..' . '/App/Controller/LibrarianController.php',
        'Lib\\App\\Controller\\MemberController' => __DIR__ . '/../..' . '/App/Controller/MemberController.php',
        'Lib\\App\\Controller\\SubscriptionController' => __DIR__ . '/../..' . '/App/Controller/SubscriptionController.php',
        'Lib\\App\\Core\\Database' => __DIR__ . '/../..' . '/App/Core/Database.php',
        'Lib\\App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'Lib\\App\\Core\\View' => __DIR__ . '/../..' . '/App/Core/View.php',
        'Lib\\App\\Middleware\\Auth' => __DIR__ . '/../..' . '/App/Middleware/Auth.php',
        'Lib\\App\\Middleware\\Guest' => __DIR__ . '/../..' . '/App/Middleware/Guest.php',
        'Lib\\App\\Model\\Book' => __DIR__ . '/../..' . '/App/Model/Book.php',
        'Lib\\App\\Model\\Librarian' => __DIR__ . '/../..' . '/App/Model/Librarian.php',
        'Lib\\App\\Model\\Member' => __DIR__ . '/../..' . '/App/Model/Member.php',
        'Lib\\App\\Model\\Subscription' => __DIR__ . '/../..' . '/App/Model/Subscription.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26b550a65a5bf4917f50c02799b54967::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26b550a65a5bf4917f50c02799b54967::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26b550a65a5bf4917f50c02799b54967::$classMap;

        }, null, ClassLoader::class);
    }
}