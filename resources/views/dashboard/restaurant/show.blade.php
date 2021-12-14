@extends('dashboard.master')
@section('content')

    <div class="mb-3 row">
        <h1 class="mx-auto">Restaurante</h1>
    </div>
    <div class="form-group">

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="name" id="name"
                    placeholder="name" value="{{ $restaurant->name }}">

            </div>
        </div>


        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">NIT</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="NIT" id="NIT"
                    placeholder="NIT" value="{{ $restaurant->NIT }}">

            </div>
        </div>


        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="address" id="address" placeholder="address"
                    value="{{ $restaurant->address }}">

            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Número Telefono</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="phone_number" id="phone_number" placeholder="phone_number"
                    value="{{ $restaurant->phone_number }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="email" id="email" placeholder="email"
                    value="{{ $restaurant->email }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Capacidad</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="capacity" id="capacity" placeholder="capacity"
                    value="{{ $restaurant->capacity }}">
            </div>
        </div>

    </div>

    <div>
        <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection