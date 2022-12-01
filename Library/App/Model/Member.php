<?php

namespace Lib\App\Model;

use Lib\App\Core\Database;

class Member extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT * FROM member");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM member WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO member(nik, name, phone, address, bornplace, born_date, gender, country, nationality, isActive, created_at) 
                                                     VALUES(:nik, :name, :phone, :address, :bornplace, :born_date, :gender, :country, :nationality, :isActive, :created_at)");
        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE member SET nik=:nik, name=:name, phone=:phone, address=:address, bornplace=:bornplace, born_date=:born_date, gender=:gender, country=:country, nationality=:nationality, isActive=:isActive, updated_at=:updated_at WHERE id=:id");
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM member WHERE id=:id");
        return $statement->execute(['id'=>$id]);
    }
}