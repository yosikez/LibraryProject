<?php

namespace Lib\App\Controller;

use Lib\App\Core\Router;
use Lib\App\Core\View;
use Lib\App\Model\Book;

class BookController
{
    private static $books;

    public function __construct()
    {
        self::$books = new Book;
    }

    public static function index()
    {
        $data = self::$books->getAll();
        View::render('books/index', $data);
    }

    public static function add()
    {
        View::render('books/add');
    }

    public static function save()
    {
        $data = [
            'isbn'=>$_POST['isbn'],
            'title'=>$_POST['title'],
            'synopsis'=>$_POST['synopsis'],
            'author'=>$_POST['author'],
            'publisher'=>$_POST['publisher'],
            'category'=>$_POST['category'],
            'language'=>$_POST['language'],
            'created_at'=>null
        ];
        if(self::$books->insert($data))
        {
            Router::redirect('/books');
        } else {
            Router::redirect('/books/add');
        }
    }

    public static function update($id)
    {
        $data = self::$books->getById($id);
        View::render('/books/update', $data);
    }

    public static function saveUpdate()
    {
        $data = [
            'id'=>$_POST['id'],
            'isbn' => $_POST['isbn'],
            'title' => $_POST['title'],
            'synopsis' => $_POST['synopsis'],
            'author' => $_POST['author'],
            'publisher' => $_POST['publisher'],
            'category' => $_POST['category'],
            'language' => $_POST['language'],
            'updated_at'=>null
        ];
        if(self::$books->update($data))
        {
            Router::redirect('/books');
        }
        else {
            Router::redirect('/books/update/:id');
        }
    }

    public static function delete($id)
    {
        self::$books->delete($id);
        Router::redirect('/books');
    }
}