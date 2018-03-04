<?php

namespace Core;

class Bootstrap
{
    public static function run()
    {
        self::parseUrl();
    }

    public static function parseUrl()
    {
        if (isset($_GET['s'])) {
            $info = explode('/', $_GET['s']);
            $class = '\Web\Controllers\\' . ucfirst($info[0]);
            $action = $info[1];
        } else {
            $class = "\Web\Controllers\Index";
            $action = "show";
        }
        echo (new $class)->$action();
    }
}