<?php
namespace Controller;
use Model\ItemManager;
use Twig_Environment;
use Twig_Loader_Filesystem;
use App\Connection;

class ItemController extends AbstractController
{
    protected $twig;

    public function index()
    {
        $itemManager = new ItemManager($this->pdo);
        $items = $itemManager->selectAll();
        return $this->twig->render('Item/item.html.twig', ['items' => $items]);
    }
    public function show(int $id)
    {
        $itemManager = new ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);
        return $this->twig->render('Item/showItem.html.twig', ['item' => $item]);
    }

}