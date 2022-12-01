<?php

namespace Lib\App\Controller;

use Lib\App\Core\View;
use Lib\App\Model\Librarian;
use Lib\App\Core\Router;

class LibrarianController
{
    public static $librarian;

    public function __construct()
    {
        self::$librarian = new Librarian;
    }

    public function index()
    {
        $data = self::$librarian->getAll();
        View::render('librarians/index', $data);
    }

    public static function login()
    {
        View::render('librarians/login');
    }
    public static function add()
    {
        View::render('librarians/add');
    }


    public static function postLogin()
    {
        $user = self::$librarian->getByUsername($_POST['username']);
        if($user && password_verify($_POST['password'], $user->password))
        {
            $_SESSION['auth'] = $user;
            var_dump($_SESSION['auth']);
            Router::redirect('/librarians');
            return;
        }
    
        Router::redirect('/login');
    }

    public static function logout()
    {
        session_destroy();
        Router::redirect('/login');
    }

    public static function save()
    {
        $data = [
            'username'=>$_POST['username'],
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'password'=>password_hash($_POST['password'], PASSWORD_DEFAULT),
            'avatar'=>$_POST['avatar'],
            'created_at'=>null
        ];
        if(self::$librarian->insert($data))
        {
            Router::redirect('/librarians');
        } else {
            Router::redirect('/librarians/add');
        }
    }

    public static function update($id)
    {
        $data = self::$librarian->getById($id);
        View::render('/librarians/update', $data);
    }
    
    public static function delete($id)
    {
        self::$librarian->delete($id);
        Router::redirect('/librarians');
    }

    public static function saveUpdate()
    {
        $data = [
            'id'=>$_POST['id'],
            'username'=>$_POST['username'],
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'avatar'=>$_POST['avatar'],
            'updated_at'=>null
            // 'updated_at'=>date('Y:m:d H:i:s')
        ];
        if(self::$librarian->update($data))
        {
            Router::redirect('/librarians');
        } else {
            Router::redirect('/librarians/update/:id');
        }
    }
}