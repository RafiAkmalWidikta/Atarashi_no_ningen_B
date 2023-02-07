<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if (isset($url[0])) {
        }
    }

    public function parseURL()
    {
    }
}`