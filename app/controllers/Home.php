<?php

class Home extends Controller
{
    public function index()
    {
        $data["judul"] = "Halaman Home";

        $this->view("auth/login", $data);
    }
}
