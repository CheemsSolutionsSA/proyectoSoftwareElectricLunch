@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="name" id="name"
            placeholder="Restaurante" value="{{ $restaurant->name }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="NIT" id="NIT"
            placeholder="NIT" value="{{ $restaurant->NIT }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="address" id="address"
            placeholder="address" value="{{ $restaurant->address }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="email" id="email"
            placeholder="email" value="{{ $restaurant->email }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="phone_number" id="phone_number"
            placeholder="phone_number" value="{{ $restaurant->phone_number }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="capacity" id="capacity"
            placeholder="capacity" value="{{ $restaurant->capacity }}">
    </div>
    <div>
        <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection
