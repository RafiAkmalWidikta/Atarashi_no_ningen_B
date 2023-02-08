<?php

class Auth extends Controller
{
    public function index()
    {
        $data["judul"] = "Halaman Login";

        $this->view("auth/login", $data);
    }
}