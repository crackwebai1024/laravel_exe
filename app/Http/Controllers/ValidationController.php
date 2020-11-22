<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    //
    public function showform()
    {
        echo "I am the get method";
        return view('login');
    }
    public function validateform(Request $request)
    {
        print_r($request->all());
        echo "I am the post method";
        $this->validate($request, [
            'username' => 'required|max:8',
            'password' => 'required',
        ]);
    }
}
