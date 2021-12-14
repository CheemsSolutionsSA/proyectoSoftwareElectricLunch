@extends('dashboard.master')
@section('content')

    <div class="mb-3 row">
        <h1 class="mx-auto">Cliente</h1>
    </div>
    <div class="form-group">

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Nombre cliente</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="name" id="name"
                    placeholder="name" value="{{ $client->name }}">

            </div>
        </div>


        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Identificación</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="identification" id="identification"
                    placeholder="identification" value="{{ $client->identification }}">

            </div>
        </div>


        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="address" id="address" placeholder="address"
                    value="{{ $client->address }}">

            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Número Telefono</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="phone_number" id="phone_number" placeholder="phone_number"
                    value="{{ $client->phone_number }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="email" id="email" placeholder="email"
                    value="{{ $client->email }}">
            </div>
        </div>

    </div>

    <div>
        <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection
