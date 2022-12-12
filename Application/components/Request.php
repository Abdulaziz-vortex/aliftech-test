<?php

namespace Application\components;

class Request
{

    public $parametrs;
    public $content_type;
    public $req_method;

    private $post = [];
    private $get = [];

    public function __construct($parametrs = [])
    {
        $this->parametrs = $parametrs;

        $this->req_method = trim($_SERVER['REQUEST_METHOD']);

        $this->content_type = !empty($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : '';
    }

    public function getPost()
    {
        if ($this->req_method !== 'POST') return '';

        foreach ($_POST as $key => $value) {
            $this->post[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        return $this->post;
    }

    public function getRequest()
    {

        if ($this->req_method !== 'GET') return '';

        foreach ($_GET as $key => $value) {
            $this->get[$key] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
        }

        return $this->get;
    }


    public function get($name)
    {
        return !empty($this->getRequest()[$name]) ? $this->getRequest()[$name] : null;
    }

    public function post($name)
    {
        return !empty($this->getPost()[$name]) ? $this->getPost()[$name] : null;
    }

}