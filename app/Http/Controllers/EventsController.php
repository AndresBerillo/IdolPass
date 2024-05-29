<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index()
    {   
        $events = Event::all();
        return view('web.events.index',compact('events'));
    }

    public function concerts()
    {
        return view('web.events.concerts');
    }

    public function showEvents($id)
    {   
        $events = Event::find($id);
        return view('web.events.showEvents',compact('events'));
    }

    public function disco()
    {
        return view('web.events.disco');
    }

    public function museum()
    {
        return view('web.events.theater');
    }

}
