<?php

namespace M2i\Tpcrudbook\Controller;

use M2i\Tpcrudbook\View;
use M2i\Tpcrudbook\Model\Book;

class BookController
{
    public function list()
    {
        $name = 'Fiorella';

        $books = Book::all();
        
        return View::render('list', [
           'name' => $name,
           'books' => $books,
        ]);
    }

    
        public function creat()
    {
        $user = new Book();
        $user->title = $_POST['name'] ?? null;
        $errors = [];
        $book = new book; 

        if (!empty($_POST)) {
            if(empty($book->title)) {
                $error['name'] = 'Le nom est invalide.';
            }
        
            if(empty($errors)) {
                $user->save(['name']);
            }
            

    }

    return View::render('creat', [
        'errors' => $errors,
        'book' => $book,
    ]);
}
}