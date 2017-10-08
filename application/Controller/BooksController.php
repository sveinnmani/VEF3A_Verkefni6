<?php

namespace Mini\Controller;

use Mini\Model\Book;

class BooksController
{
    public function index()
    {
        $Book = new Book();

        $books = $Book->getAllBooks();

        require APP . 'view/_templates/header.php';
        require APP . 'view/books/index.php';
        require APP . 'view/_templates/footer.php';
    }
}