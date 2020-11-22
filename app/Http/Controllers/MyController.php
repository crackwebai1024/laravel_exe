<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $my;
    public function __construct(\My $my)
    {
        $this->my = $my;
    }
    public function index()
    {
        dd($this->my);
        echo 'index';
    }
    public function create()
    {
        echo 'create';
    }
    public function store(Request $request)
    {
        echo 'store';
    }
    public function show($id)
    {
        echo 'show';
    }
    public function edit($id)
    {
        echo 'edit';
    }
    public function update(Request $request, $id)
    {
        echo 'update';
    }
    public function destroy($id)
    {
        echo 'destroy';
    }
}
