<?php

namespace App\Controllers;

use Framework\Controller\BaseController;


class IndexController extends BaseController
{
    private $clientModel;

    public function __construct()
    {
        parent::__construct($this);
        $this->clientModel = new \App\Model\Client();
    }

    public function index() {
        $this->view->peoples = $this->clientModel->searchAll();
        $this->render("index");
    }
}