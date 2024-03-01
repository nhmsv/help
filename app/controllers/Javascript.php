<?php

namespace Controller;

if (!defined("ROOT")) die("direct script access denied");

use Database;

class Javascript extends Controller
{

    public function index()
    {
        $this->data['action'] = 'index';
        $this->view('javascript/home', $this->data);
    }

    public function MVC_Model()
    {
        $this->data['action'] = 'MVC_Model';

        $this->view('javascript/mvc_model', $this->data);
    }

    public function MVC_View()
    {
        $this->data['action'] = 'MVC_View';

        $this->view('javascript/mvc_view', $this->data);
    }

    public function MVC_Controller()
    {
        $this->data['action'] = 'MVC_Controller';

        $this->view('javascript/mvc_controller', $this->data);
    }
}
