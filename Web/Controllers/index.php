<?php

namespace Web\Controllers;

use \Core\View;

class Index
{
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function show()
    {
        return $this->view->make('index')->with('version', '1.0');
    }

    public function post()
    {
        echo 'post';
    }
}