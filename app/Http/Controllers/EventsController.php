<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Type;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index()
    {
        $query = Event::query();
        $types = Type::all();
        if ($search = request()->input('search')) {
            $query->where('title','like',"%$search%");
        }

        $query->orderBy('event_date', 'asc');

        $events = $query->paginate(4);
        return view('web.events.index',compact('events','types'));
    }

    public function showEvents($id)
    {
        $events = Event::find($id);
        $types = Type::all();
        return view('web.events.showEvents',compact('events','types'));
    }

    public function filter()
    {
        $query = Event::query();

        if (request()->has('title')) {
            $query->where('title','like','%' .request()->input('title'). '%');
        }

    }

    public function type($type_id)
    {
        $types = Type::find($type_id);
        $events = Event::where('type_id',$type_id)->get();
        return view('web.events.types', compact('events','types'));
    }

    public function add($id)
    {
        if (!session()->has('cart')) {
            session(['cart' => []]);
        }

        $ids = session('cart');
        $ids[] = $id;
        session(['cart' => $ids]);

        return redirect('/cart');
    }

    public function remove($id)
{
    $ids = session('cart', []);
    if (!is_array($ids)) {
        $ids = [];
    }

    $ids = array_filter($ids, function ($current_id) use ($id) {
        return $current_id != $id;
    });

    session(['cart' => $ids]);

    return redirect('/cart');
}

public function showCart()
{
    $cart = session('cart', []);

    $events = Event::whereIn('id', $cart)->get();

    return view('web.events.cart', compact('events'));
}

public function clearCart()
{
    session()->forget('cart');

    return redirect('/events');
}

public function buyCart()
{
    session()->forget('cart');

    return redirect('/events');
}

}
