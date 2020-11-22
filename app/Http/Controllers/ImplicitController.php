<?php

namespace App\Http\Controllers;

class ImplicitController extends Controller
{
    //
    public function getIndex()
    {
        echo 'index method';
    }
    public function getShow($id)
    {
        echo 'show method';
    }
    public function getAdminProfile()
    {
        echo 'admin profile method';
    }
    public function postProfile()
    {
        echo 'profile method';
    }
}
