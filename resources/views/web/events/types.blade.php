@extends('layouts.app')

@section('title','IdolPass')

@section('navbar')
    @include('partials.navTransparence')
@endsection

@section('content')
    <!-- image start -->
    <div class="">
        <section class="idolpass-home-img">
            <img src="https://i0.wp.com/elargentinodiario.com.ar/wp-content/uploads/2023/08/Show-N.N-87-1024x683.jpeg?ssl=1"
                alt="Backgound_img">
            <div class="content text-center">
                <h1 class="text-size-title">IDOLPASS</h1>
                <h2 class="semi-transparent-text text-size-subtitle">Preparate para tu próxima experiencia.</h2>
            </div>
            <div class="button-center">
                <a href="#events_cards">
                <button type="button" class="btn btn-outline-white ">Ver eventos</button>
                </a>
            </div>
        </section>
    </div>
    <!-- image end -->


    <!-- section 2 start -->
    <section>
        <!-- Botón para ver el carrito -->
    <div class="container mt-3 d-flex justify-content-between">
        <form action="/events" class="d-flex">
            <input class="form-control me-2" type="search" id="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="d-flex"> 
            <div>
                <a href="{{ route('web.cart.show') }}" class="btn btn-warning" style="
                margin-right: 1rem;">
                    <i class="fa-solid fa-shopping-cart"></i> Carrito ({{ count(session('cart', [])) }})
                </a>
            </div>
                <div >
                    <a href="/events">
                        <button class="btn btn-primary">volver</button>
                    </a>
                </div>
        </div>
        
    </div>
        
        <div class="container">
            <div class="row mb-2">
                <div class="col-12 mt-4">
                    <h3 class=" mt-3 proximos-eventos-style">Próximos eventos</h3>
                </div>
            </div>
        </div>

        <!-- CARDS start -->
        <div>
            <div class="row row-cols-1 row-cols-md-4 g-4 container m-auto" id="events_cards">
                @forelse($events as $event)
                <div class="col ">
                    <div class="card h-100 card-color card-border-radius">
                        <img src="/storage/{{ $event->image->src }}"
                            class="card-img-top card-img-size" alt="{{ $event->name }}">
                        <div class="card-body shadow">
                            <div>
                                <h2 class="card-title">{{ $event->title }}</h2>
                                <p class="card-text ">{{ $event->location_address }}</p>
                                <p class="card-text color-text-2">{{ $event->event_date }}</p>
                                <p class="card-text text-categoria">
                                    {{$event->type->value}}
                                </p>
                            </div>
                            <div class="card-button-class">
                                <div class="ticket-class">
                                    <i class="fa-solid fa-ticket ticket-icon" style="color: #ffffff;"></i>
                                    <p class="text-center ticket-price ">${{$event->price }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('web.events.showEvents', $event->id) }}">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                                        Más info
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <tr>
                        <td colspan="4">
                            <p class="h3 text-center" > No hay eventos para mostrar </p>
                        </td>
                    </tr>
                @endforelse
            </div>
        </div>
        <!-- CARDS end -->

    </section>
    <!-- section 2 end -->
@endsection

