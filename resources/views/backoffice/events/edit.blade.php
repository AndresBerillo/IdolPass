@extends('layouts.app')

@section('title','IdolPass')

@section('navbar')
    @include('partials.navBlack')
@endsection

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/backoffice/events/{{ $event->id }}" style="color: white">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Título</label>
                        <input name="title" value="{{ $event->title }}" id="title" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="producer">Productora</label>
                        <input name="producer" value="{{ $event->producer }}" id="producer" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="description">Descripción</label><br>
                        <textarea name="description" id="description" type="text" class="from-control" cols="30" rows="10" >{{ $event->description }} </textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="location_name">Nombre del lugar</label>
                        <input name="location_name" value="{{ $event->location_name }}" id="location_name" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="location_address">Dirección del lugar</label>
                        <input name="location_address" value="{{ $event->location_address }}" id="location_address" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="event_date">Fecha del evento</label>
                        <input name="event_date" value="{{ $event->event_date }}" id="event_date" type="date" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="price">Precio de entrada</label>
                        <input name="price" value="{{ $event->price }}" id="price" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="event_type">Tipo de evento</label>
                        <select class="form-control" name="event_type" id="event_type">
                            <option @selected($event->event_type == 1) value="1">Boliche</option>
                            <option @selected($event->event_type == 2) value="2">Concierto</option>
                            <option @selected($event->event_type == 3) value="3">Teatro</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Poster</label>
                        <textarea name="image"  id="image" type="text" class="form-control">{{ $event->image }} </textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary" name"submit" type="submit"> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    @endsection
