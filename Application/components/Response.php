<?php

namespace Application\components;

class Response
{
    public $view_folder = "./pages/";

    public function __construct($parametrs = []){
        $this->view_folder = !empty($parametrs['view_folder']) ? $parametrs['view_folder'] : $this->view_folder;
    }

}