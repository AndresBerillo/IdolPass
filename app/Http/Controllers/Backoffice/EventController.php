<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Type;
use App\Models\Image;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'asc')->paginate(5);
        $types = Type::all();
        return view('backoffice.events.index',compact('events','types'));
    }

    public function create() {
        return view('backoffice.events.create');
    }

    public function store(Request $request) {


        $event = new Event;
        $event->title = request()->input('title');
        $event->producer = request()->input('producer');
        $event->description = request()->input('description');
        $event->location_name = request()->input('location_name');
        $event->location_address = request()->input('location_address');
        $event->event_date = request()->input('event_date');
        $event->price = request()->input('price');
        $event->type_id = request()->input('event_type');

            $src = request()->file('image')->store('events');
            $image = new Image;
            $image->src = $src;
            $image->save();
            $event->image_id = $image->id;

        $event->save();

        return redirect('/backoffice/events');
    }

    public function edit($id) {
        $event = Event::find($id);
        $types = Type::all();
        return view('backoffice.events.edit',compact('event','types'));
    }

    public function update(Request $request, $id) {



        $event = Event::find($id);
        if ($request->hasFile('image')) {
            $src = request()->file('image')->store('events');
            $image = new Image;
            $image->src = $src;
            $image->save();
            $event->image_id = $image->id;
        }


        $event->title = request()->input('title');
        $event->producer = request()->input('producer');
        $event->description = request()->input('description');
        $event->location_name = request()->input('location_name');
        $event->location_address = request()->input('location_address');
        $event->event_date = request()->input('event_date');
        $event->price = request()->input('price');
        $event->type_id = request()->input('event_type');
        $event->save();

        return redirect('/backoffice/events');
    }

    public function type($type_id)
    {
        $types = Type::find($type_id);
        $events = Event::where('type_id',$type_id)->get();
        return view('backoffice.events.types', compact('events','types'));
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if ($event) {
            $event->delete();
        }

        return redirect('/backoffice/events');
    }

}
