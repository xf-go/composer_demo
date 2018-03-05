<?php

namespace Web\Controllers;

use Core\View;
use Gregwar\Captcha\CaptchaBuilder;

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

    public function login()
    {
        return $this->view->make('login');
    }

    public function code()
    {
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder();
        $builder->build(100, 30);
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
    }
}