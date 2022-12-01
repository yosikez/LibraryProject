<?php

namespace Lib\App\Model;

use Lib\App\Core\Database;

class Librarian extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT * FROM librarian");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function getById($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM librarian WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO librarian (username, name, email, password, avatar, created_at) VALUES (:username, :name ,:email, :password, :avatar, :created_at)");
        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE librarian SET username=:username, name=:name, email=:email, avatar=:avatar, updated_at=:updated_at  WHERE id=:id");
        return $statement->execute($data);
    }

    public static function getByUsername($username)
    {
        $statement = self::$conn->prepare("SELECT * FROM librarian WHERE username=:username");
        $statement->execute(['username'=>$username]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM librarian WHERE id=:id");
        return $statement->execute(['id'=>$id]);
    }
}

