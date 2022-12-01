<?php
namespace Lib\App\Middleware;

use Lib\App\Core\Router;


class Guest
{
    function before(): void
    {
        if(@$_SESSION['auth'])
        {
            Router::redirect('/librarians');
        }
    }
}