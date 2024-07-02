@extends('layouts.app')

@section('title','IdolPass')

@section('navbar')
    @include('partials.navBlack')
@endsection

@section('content')
    <div class="container">
        <h1 style="color: white">Carrito de Compras</h1>
        @if (session()->has('cart') && count(session('cart')) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($events as $event)
                        @php $total += $event->price; @endphp
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>${{ $event->price }}</td>
                            <td>
                                <a href="/backoffice/events/remove/{{ $event->id }}" class="btn btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>${{ $total }}</strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <form action="{{ route('web.cart.buy') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Comprar</button>
                </form>
                <form action="{{ route('web.cart.clear') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning">Limpiar Carrito</button>
                </form>
            </div>
        @else
            <p>No hay eventos en el carrito.</p>
        @endif
    </div>
@endsection

