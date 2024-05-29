<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() 
    {   
        $events = Event::all();
        return view('backoffice.events.index',compact('events'));
    }

    public function create() {
        return view('backoffice.events.create');
    }

    public function store() {

        $event = new Event;
        $event->title = request()->input('title');
        $event->producer = request()->input('producer');
        $event->description = request()->input('description');
        $event->location_name = request()->input('location_name');
        $event->location_address = request()->input('location_address');
        $event->event_date = request()->input('event_date');
        $event->price = request()->input('price');
        $event->event_type = request()->input('event_type');
        $event->image = request()->input('image');
        $event->save();
        
        return redirect('/backoffice/events');
    }
    
    public function edit($id) {
        $event = Event::find($id);
        return view('backoffice.events.edit',compact('event'));
    }

    public function update($id) {

        $event = Event::find($id);
        $event->title = request()->input('title');
        $event->producer = request()->input('producer');
        $event->description = request()->input('description');
        $event->location_name = request()->input('location_name');
        $event->location_address = request()->input('location_address');
        $event->event_date = request()->input('event_date');
        $event->price = request()->input('price');
        $event->event_type = request()->input('event_type');
        $event->image = request()->input('image');
        $event->save();
        
        return redirect('/backoffice/events');
    }


}
