<?php
namespace App\Controllers;

use App\Models\Book;
use App\Traits\UserTraits;

class BookController extends Controller{
    use UserTraits;

    private $bookModel;
    function __construct()
    {
        $this->bookModel = new Book();
    }


    function index() {
        $this->bookModel->get();
    }
}