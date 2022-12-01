<?php

namespace Lib\App\Controller;

use Lib\App\Model\MemberTrx;
use Lib\App\Core\Router;
use Lib\App\Core\View;
use Lib\App\Model\Member;
use Lib\App\Model\Subscription;

class MemberTrxController
{
    public static $memberTrxs;
    public static $members;
    public static $subscriptions;
    public function __construct()
    {
        self::$memberTrxs = new MemberTrx;
        self::$members = new Member;
        self::$subscriptions = new Subscription;
    }

    public static function index()
    {
        $data = self::$memberTrxs->getAll();
        View::render('memberTrxs/index', $data);
    }

    public static function add()
    {
        $data['members'] = self::$members->getAll();
        $data['subscriptions'] = self::$subscriptions->getAll();
        View::render('memberTrxs/add', $data);
    }

    public static function save()
    {
        $data = [
            'member_id'=>$_POST['member_id'],
            'subs_id'=>$_POST['subs_id'],
            'trx_date'=>$_POST['trx_date'],
            'active_at'=>$_POST['active_at'],
            'expire_at'=>$_POST['expire_at'],
            'status'=>$_POST['status'],
            'total_order'=>$_POST['total_order'],
            'note'=>$_POST['note'],
            'created_at'=>null
        ];
        if(self::$memberTrxs->insert($data))
        {
            Router::redirect('/subsmember');
        } else {
            Router::redirect('/subsmember/add');
        }
    }

    public static function update($id)
    {
        $data['user'] = self::$memberTrxs->getById($id);
        $data['members'] = self::$members->getAll();
        $data['subscriptions'] = self::$subscriptions->getAll();
        View::render('memberTrxs/update', $data);
    }

    public static function saveUpdate()
    {
        $data = [
            'id'=>$_POST['id'],
            'member_id'=>$_POST['member_id'],
            'subs_id'=>$_POST['subs_id'],
            'trx_date'=>$_POST['trx_date'],
            'active_at'=>$_POST['active_at'],
            'expire_at'=>$_POST['expire_at'],
            'status'=>$_POST['status'],
            'total_order'=>$_POST['total_order'],
            'note'=>$_POST['note'],
            'updated_at'=>null
        ];
        if(self::$memberTrxs->update($data))
        {
            Router::redirect('/subsmember');
        }
        else {
            Router::redirect('/subsmember/update/:id');
        }
    }

    public static function delete($id)
    {
        self::$memberTrxs->delete($id);
        Router::redirect('/subsmember');
    }
}