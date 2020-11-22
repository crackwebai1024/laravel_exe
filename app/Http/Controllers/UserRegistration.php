<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    //
    public function postRegister(Request $request)
    {
        // retrieve the name input field
        $name = $request->input('name');
        echo 'Name: ' . $name;
        echo '<br>';

        // retrieve the username input field
        $username = $request->username;
        echo 'username: ' . $username;
        echo '<br>';

        // retrieve the password input field
        $password = $request->password;
        echo 'password: ' . $password;
    }
}
