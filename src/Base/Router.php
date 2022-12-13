<?php

namespace Hillel\Base;


use Hillel\Controllers\PageController;

class Router
{

    public function route():callable
    {
        if ($_SERVER['REQUEST_URI'] == '/contact') {
            $controller = new PageController();
            return [$controller, 'contact'];
        } else {
            throw new \Error('Not found');
        }
    }
}

