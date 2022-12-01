<?php
namespace Lib\App\Middleware;

use Lib\App\Core\Router;

// middleware adalah digunakan untuk menghandel sebeelum asuka kedalam auth
class Auth
{
    function before(): void
    {
        if($_SESSION['auth'] == null)
        {
            Router::redirect('/login');
        }
    }
}