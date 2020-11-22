<?php

namespace App\Http\Controllers;

class AjaxController extends Controller
{
    //
    public function index()
    {
        $msg = "This is a simple message.";
        // echo json_encode($msg);
        // echo "request arrived here";
        return response()->json(array('msg' => $msg), 200);
    }
}
