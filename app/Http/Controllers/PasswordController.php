<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //
    public function update(Request $request)
    {
        $request->user()->fill([
            'password' => Hash::make($request->newPassword),
        ])->save();
        if (Hash::check('plain-text', $hashedValue)) {
            //
        }
    }
}
