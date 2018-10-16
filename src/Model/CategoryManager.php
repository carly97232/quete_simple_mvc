<?php
namespace Model;
use App\Connection;

class CategoryManager extends AbstractManager
{

    const TABLE = 'category';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Category $category): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`title`) VALUES (:title)");
        $statement->bindValue('title', $category->getTitle(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}

