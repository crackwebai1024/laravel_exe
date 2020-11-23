<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use Event;

class EventController extends Controller
{
    //
    public function index()
    {
        Event::dispatch(new SendMail(1));
        dd('hi');
    }
}
