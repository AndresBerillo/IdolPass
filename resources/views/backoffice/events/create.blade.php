<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.head')
    <title>Form create </title>
</head>
<body>
    @include('layouts.app')
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/backoffice/events" >
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Título</label>
                        <input name="title" id="title" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="producer">Productora</label>
                        <input name="producer" id="producer" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="description">Descripción</label> <br>
                        <textarea name="description" id="description" type="text" class="from-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="location_name">Nombre del lugar</label>
                        <input name="location_name" id="location_name" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="location_address">Dirección del lugar</label>
                        <input name="location_address" id="location_address" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="event_date">Fecha del evento</label>
                        <input name="event_date" id="event_date" type="date" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="price">Precio de entrada</label>
                        <input name="price" id="price" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="event_type">Tipo de evento</label>
                        <select class="form-control" name="event_type" id="event_type">
                            <option value="1">Boliche</option>
                            <option value="2">Concierto</option>
                            <option value="3">Teatro</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Poster</label>
                        <textarea name="image" id="image" type="text" class="form-control"> </textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name "submit" type="submit"> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

        <!-- footer star -->
        @include('partials.footer')
        <!-- footer end -->

        <!-- Js files -->
        @include('partials.jscripts')
</body>
</html>
