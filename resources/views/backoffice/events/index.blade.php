
@extends('layouts.app')

@section('title','IdolPass')

@section('navbar')
    @include('partials.navBlack')
@endsection

@section('content')
<main class="container">
    <div class="row">
        <div class="col-md-12" style="color: white">
            <h1>Listado de eventos</h1>
        </div>
    </div>

    <div class="container d-flex justify-content-between">
    <div>
        <a href="/backoffice/events/create" class="btn btn-success mb-3"
            style="margin-right: 0.2rem">Agregar</a>
    </div>
    <div>
        <li class="nav-item dropdown" style="color: white">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Filtro
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($types as $type)
                <li><a class="dropdown-item" href="{{ url('backoffice/types/' . $type->id) }}">{{ $type->value }}</a></li>
                @endforeach
            </ul>
          </li>
    </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>Poster</th>
                        <th>Título</th>
                        <th>Productora</th>
                        <th>Descripción</th>
                        <th>Nombre del lugar</th>
                        <th>Dirección del lugar</th>
                        <th>Día del evento</th>
                        <th>Precio</th>
                        <th>Tipo de evento</th>
                        <th>Acciones</th>
                </thead>
                <tbody class="text-tbody">
                    @forelse($events as $event)

                    <tr>
                        <td> <img style="width: 80px" src="/storage/{{ $event->image->src }}" alt="{{  $event->title  }}"></td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->producer }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->location_name }}</td>
                        <td>{{ $event->location_address }}</td>
                        <td>{{ $event->event_date }}</td>
                        <td>{{ $event->price }}</td>
                        <td>{{$event->type->value}}</td>
                        <td >
                            <div class="d-flex" >
                                <a href="/backoffice/events/{{ $event->id }}/edit" class="btn btn-primary"
                                    style="margin-right: 0.2rem">Editar</a>
                                    <form action="{{ route('backoffice.destroy', $event->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                            </div>

                        </td>
                    </tr>


                    @empty
                    <tr>
                        <td  colspan="10" >
                            <p class="h3 text-center" > No hay eventos para mostrar </p>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
        <div class=" justify-content-center">
            {{$events->links()}}
        </div>
</main>

@endsection
