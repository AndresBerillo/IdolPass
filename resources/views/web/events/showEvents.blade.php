@extends('layouts.app')

@section('title','IdolPass')

@section('navbar')
@include('partials.navBlack')
@endsection

@section('content')

<div class="container">
    <div class="eventCardPreviewDark p-3 p-md-4 p-lg-5" style="min-height: 100vh;">
        <div style="" class="row">
            <div class="col-lg-5">
                <div style="overflow: hidden; border-radius: 0.5rem;"><img class="img-fluid"
                        src="/storage/{{ $events->image->src }}"></div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="row">
                    <div class="col-12 mt-5 mt-lg-0">
                        <h2 class="d-flex align-items-center">
                            {{ $events->title }}
                        </h2>
                        <h5 style="opacity: 0.75;">
                            {{ $events->producer }}
                        </h5>
                        <h6 style="opacity: 0.75;">
                            {{$events->type->value}}
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z">
                            </path>
                        </svg><span class="ms-2">Fecha</span>
                        <p class="MuiTypography-root MuiTypography-body2 mt-2 opacity-60 css-1sle8mk">
                            {{ $events->event_date }}
                        </p>
                    </div>
                    <div class="col-md-6 mt-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z">
                            </path>
                        </svg><span class="ms-2">Ubicación</span>
                        <p class="MuiTypography-root MuiTypography-body2 mt-2 opacity-60 css-1sle8mk"
                            style="cursor: pointer; text-decoration: underline;">
                            {{ $events->location_name }}
                        </p>
                    </div>
                </div>
                <div class="row"></div>
                <hr class="mb-3 mt-4" style="margin-top: 0px;">
                <div class="row">
                    <div class="col-12"><b>Tickets</b></div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="eventTicketsDark">
                            <table class="table table-borderless table-sm tableTicketsDark">
                                <thead>
                                    <tr>
                                        <th scope="col">Ticket</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Comprar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tableDesc" style="vertical-align: middle;">
                                            <div>General<small class="d-block"
                                                    style="opacity: 0.75; font-size: 60%;"></small></div>
                                        </td>
                                        <td style="vertical-align: middle; min-width: 100px;">
                                            ${{ $events->price }}
                                        </td>
                                        <td class="selectAmmount" style="vertical-align: middle; min-width: 115px;">
                                            @if (session()->has('cart') && is_array(session('cart')) &&
                                            in_array($events->id, session('cart')))
                                            <div class="col-12 d-flex align-items-center justify-content-between">
                                                <a href="/backoffice/events/remove/{{ $events->id }}">
                                                    <button class="btn btn-danger">Remover</button>
                                                </a>
                                            </div>
                                            @else
                                            <div class="col-12 d-flex align-items-center justify-content-between">
                                                <a href="/backoffice/events/add/{{ $events->id }}">
                                                    <button class="btn btn-primary">Adquirir</button>
                                                </a>
                                            </div>
                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h6 class="MuiTypography-root MuiTypography-h6 MuiTypography-gutterBottom css-4an0mh">Descripción
                </h6>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12" style="white-space: pre-wrap;">
                <p style="color: rgb(140, 142, 145);">
                    {{ $events->description }}
                </p>
            </div>
        </div>
        <div class="row mt-4" id="location-detail">
            <div class="col-12">
                <h6 class="MuiTypography-root MuiTypography-h6 MuiTypography-gutterBottom css-4an0mh">Lugar</h6>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col d-flex align-items-center">
                <span class="mb-0 d-flex align-items-center">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        class="me-2 icon" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 2H9c-1.103 0-2 .897-2 2v5.586l-4.707 4.707A1 1 0 0 0 3 16v5a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zm-8 18H5v-5.586l3-3 3 3V20zm8 0h-6v-4a.999.999 0 0 0 .707-1.707L9 9.586V4h10v16z">
                        </path>
                        <path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 1h2v2H7z"></path>
                    </svg>
                    {{ $events->location_name }}
                </span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col d-flex align-items-center">
                <span class="mb-0 d-flex align-items-center">
                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" class="me-2 icon"
                        height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    {{ $events->location_address }}
                </span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12" style="white-space: pre-wrap; text-align: justify;"><small class="text-silence"
                    style="font-size: 0.8rem">La carga de productos y textos en el sistema licenciado son de exclusiva
                    responsabilidad del Productor/Organizador. IdolPass no se hace responsable civil o jurídicamente por
                    las declaraciones emitidas por estos en lo relativo a los productos vendidos en su plataforma. El
                    Productor/Organizador es el único y exclusivo responsable de la producción y organización del
                    Evento, en forma oportuna y en conformidad a la ley. <a
                        href="https://flashpass.com.ar/terminos-y-condiciones"
                        class="text-silence text-decoration-underline">Ver términos y condiciones.</a></div>
        </div>
    </div>
</div>

@endsection