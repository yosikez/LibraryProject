<?php

namespace Lib\App\Controller;

use Lib\App\Core\View;
use Lib\App\Core\Router;
use Lib\App\Model\Subscription;


class SubscriptionController
{
    public static $subscriptions;
    
    public function __construct()
    {
        self::$subscriptions = new Subscription;
    }

    public static function index()
    {
        $data = self::$subscriptions->getAll();
        View::render('subscriptions/index', $data);
    }

    public static function add()
    {
        View::render('subscriptions/add');
    }

    public static function save()
    {
        $data = [
            'title'=>$_POST['title'],
            'month'=>$_POST['month'],
            'price'=>$_POST['price'],
            'isActive'=>$_POST['isActive'],
            'created_at'=>null
        ];
        if(self::$subscriptions->insert($data))
        {
            Router::redirect('/subscriptions');
        } else {
            Router::redirect('/subscriptions/add');
        }
    }

    public static function update($id)
    {
        $data = self::$subscriptions->getById($id);
        View::render('/subscriptions/update', $data);
    }

    public static function saveUpdate()
    {
        $data = [
            'id'=>$_POST['id'],
            'title'=>$_POST['title'],
            'month'=>$_POST['month'],
            'price'=>$_POST['price'],
            'isActive'=>$_POST['isActive'],
            'updated_at'=>null
        ];
        if(self::$subscriptions->update($data))
        {
            Router::redirect('/subscriptions');
        }
        else {
            Router::redirect('/subscriptions/update/:id');
        }
    }

    public static function delete($id)
    {
        self::$subscriptions->delete($id);
        Router::redirect('/subscriptions');
    }
}