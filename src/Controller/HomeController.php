<?php

namespace M2i\Tpcrudbook\Controller;

use M2i\Tpcrudbook\View;

class HomeController
{
    public function index()
    {
        return View::render('home');
    }
}
