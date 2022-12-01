<?php

namespace Lib\App\Model;

use Lib\App\Core\Database;

class Subscription extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT * FROM subscriptions");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM subscriptions WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO subscriptions(title, month, price, isActive, created_at) 
                                                     VALUES(:title, :month, :price, :isActive, :created_at)");
        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE subscriptions SET title=:title, month=:month, price=:price, isActive=:isActive, updated_at=:updated_at WHERE id=:id");
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM subscriptions WHERE id=:id");
        return $statement->execute(['id'=>$id]);
    }
}