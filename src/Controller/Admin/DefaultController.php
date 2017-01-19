<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

class DefaultController extends AppController {

    public function home(){
        $this->viewBuilder()->layout("adminLayout");
    }

}
