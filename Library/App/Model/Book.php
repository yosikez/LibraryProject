<?php

namespace Lib\App\Model;

use Lib\App\Core\Database;

class Book extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare("SELECT * FROM books");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM books WHERE id=:id");
        $statement->execute(['id'=>$id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO books(isbn, title, synopsis, author, publisher, category, language, created_at) 
                                                     VALUES(:isbn, :title, :synopsis, :author, :publisher, :category, :language, :created_at)");
        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE books SET isbn=:isbn, title=:title, synopsis=:synopsis, author=:author, publisher=:publisher, category=:category, language=:language, updated_at=:updated_at WHERE id=:id");
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM books WHERE id=:id");
        return $statement->execute(['id'=>$id]);
    }
}