<?php


namespace M2i\Tpcrudbook\Controller;

use M2i\Tpcrudbook\View;


class UserController
{
    public function list()
    {
        $name = 'Fiorella';

        $books = User::all();
        
        return View::render('list', [
           'name' => $name,
           'books' => $books,
           'users' => $users,
        ]);
    }

    
        public function creat()
    {
        $user = new User();
        $user->name = $_POST['name'] ?? null;
        $errors = [];

        if (!empty($_POST)) {
            if(empty($user->name)) {
                $error['name'] = 'Le nom est invalide.';
            }
        
            if(empty($errors)) {
                $user->save(['name']);
            }
            
            return View::render('creat', [
                'errors' => $errors,
                'user' => $user,
            ]);

    }
}
}