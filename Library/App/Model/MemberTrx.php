<?php

namespace Lib\App\Model;

use Lib\App\Core\Database;

class MemberTrx extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT member_trxs.*, member.name AS memberName, subscriptions.title AS subsTitle FROM member_trxs JOIN member ON member_trxs.member_id = member.id JOIN subscriptions ON member_trxs.subs_id = subscriptions.id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM member_trxs WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO member_trxs(member_id, subs_id, trx_date, active_at, expire_at, status, total_order, note, created_at) 
                                                     VALUES(:member_id, :subs_id, :trx_date, :active_at, :expire_at, :status, :total_order, :note, :created_at)");
        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE member_trxs SET member_id=:member_id, subs_id=:subs_id, trx_date=:trx_date, active_at=:active_at, expire_at=:expire_at, status=:status, total_order=:total_order, note=:note, updated_at=:updated_at WHERE id=:id");
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM member_trxs WHERE id=:id");
        return $statement->execute(['id'=>$id]);
    }
}