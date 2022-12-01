<?php

namespace Lib\App\Controller;

use Lib\App\Model\Member;
use Lib\App\Core\Router;
use Lib\App\Core\View;

class MemberController
{
    public static $members;
    public function __construct()
    {
        self::$members = new Member;
    }

    public static function index()
    {
        $data = self::$members->getAll();
        View::render('members/index', $data);
    }

    public static function add()
    {
        View::render('members/add');
    }

    public static function save()
    {
        $data = [
            'nik'=>$_POST['nik'],
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'address'=>$_POST['address'],
            'bornplace'=>$_POST['bornplace'],
            'born_date'=>$_POST['born_date'],
            'gender'=>$_POST['gender'],
            'country'=>$_POST['country'],
            'nationality'=>$_POST['nationality'],
            'isActive'=>$_POST['isActive'],
            'created_at'=>null
        ];
        if(self::$members->insert($data))
        {
            Router::redirect('/members');
        } else {
            Router::redirect('/members/add');
        }
    }

    public static function update($id)
    {
        $data = self::$members->getById($id);
        View::render('/members/update', $data);
    }

    public static function saveUpdate()
    {
        $data = [
            'id'=>$_POST['id'],
            'nik'=>$_POST['nik'],
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'address'=>$_POST['address'],
            'bornplace'=>$_POST['bornplace'],
            'born_date'=>$_POST['born_date'],
            'gender'=>$_POST['gender'],
            'country'=>$_POST['country'],
            'nationality'=>$_POST['nationality'],
            'isActive'=>$_POST['isActive'],
            'updated_at'=>null
        ];
        if(self::$members->update($data))
        {
            Router::redirect('/members');
        }
        else {
            Router::redirect('/members/update/:id');
        }
    }

    public static function delete($id)
    {
        self::$members->delete($id);
        Router::redirect('/members');
    }
}