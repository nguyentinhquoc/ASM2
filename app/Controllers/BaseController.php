<?php

namespace App\Controllers;

use eftec\bladeone\BladeOne;
// session_start();
class BaseController
{
    function BladeOne($view, $data = [])
    {
        $viewDir = "app/Views";
        $cache = "cache";
        $blade = new BladeOne($viewDir, $cache, BladeOne::MODE_DEBUG);
        echo $blade->run($view, $data);
    }
}