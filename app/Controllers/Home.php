<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login(): string
    {
        return view('login');
    }

    public function index(): string
    {
        $user = auth()->user();
        print_r($user);
        return view('welcome_message');
    }
}
