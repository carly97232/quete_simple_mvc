<?php
namespace Model;
use App\Connection;

class ItemManager extends AbstractManager
{

    const TABLE = 'item';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Item $item): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`title`) VALUES (:title)");
        $statement->bindValue('title', $item->getTitle(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}

