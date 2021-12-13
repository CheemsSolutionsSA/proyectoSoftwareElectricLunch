@extends('dashboard.master')
@section('content')

    <div class="mb-3 row">
        <h1 class="mx-auto">Reserva</h1>
    </div>
    <div class="form-group">

        <div class="mb-3 row">
            <label for="id_restaurant" class="col-sm-2 col-form-label">Número reserva</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="id_reservation" id="id_reservation"
                    placeholder="id_reservation" value="{{ $reservation->id_reservation }}">

            </div>
        </div>


        <div class="mb-3 row">
            <label for="id_restaurant" class="col-sm-2 col-form-label">Restaurante</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="id_restaurant" id="id_restaurant"
                    placeholder="id_restaurant" value="{{ $reservation->id_restaurant }}">

            </div>
        </div>


        <div class="mb-3 row">
            <label for="id_restaurant" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="date" id="date" placeholder="date"
                    value="{{ $reservation->date }}">

            </div>
        </div>

        <div class="mb-3 row">
            <label for="id_restaurant" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="price" id="price" placeholder="price"
                    value="{{ $reservation->price }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id_restaurant" class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="Cantidad" id="Cantidad" placeholder="Cantidad"
                    value="{{ $reservation->cant_chairs }}">
            </div>
        </div>


    </div>

    <div>
        <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection
