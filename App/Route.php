<?php

namespace App;

use Framework\Init\Bootstrap;

class Route extends Bootstrap
{

    public function initRoutes() {
        $this->routes["home"] = array('route' => '/', "controller" => "IndexController", 'action' => "index");
        $this->routes["contact"] = array('route' => '/contact', "controller" => "IndexController", 'action' => "index");
    }

}