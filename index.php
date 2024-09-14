<?php 
use App\Controllers\BookController;
require_once "vendor/autoload.php";

$bookController = new BookController();

var_dump($bookController->index());
