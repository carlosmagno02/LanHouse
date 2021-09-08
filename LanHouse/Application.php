<?php

namespace LanHouse;

class Application
{
    public function run()
    {
        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Login';
        $url = ucfirst($url);
        $url .= "Controller";
        if (file_exists('LanHouse/Controllers/' . $url . '.php')) {
            $className = 'LanHouse\Controllers\\' . $url;
            $controller = new $className;
            $controller->index();
        } else {
            include('Views/pages/404.php');
            die();
        }
    }
}