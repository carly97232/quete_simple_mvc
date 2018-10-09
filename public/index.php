<?php
require __DIR__ . '/../vendor/autoload.php';


$index = new \Controller\ItemController();
echo $index->index();

?>