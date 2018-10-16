<?php
/**
 * Created by PhpStorm.
 * User: jovanela
 * Date: 16/10/18
 * Time: 15:59
 */

namespace Model;


class Category
{
    private $id;
    private $title;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Category
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title):Category
    {
        $this->title = $title;
        return $this;
    }
}