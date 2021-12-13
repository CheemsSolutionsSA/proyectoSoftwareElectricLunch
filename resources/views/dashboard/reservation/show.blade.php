@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="id_reservation" id="id_reservation"
            placeholder="id_reservation" value="{{ $reservation->id_reservation }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="id_client" id="id_client"
            placeholder="id_client" value="{{ $reservation->id_client }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="id_restaurant" id="id_restaurant"
            placeholder="id_restaurant" value="{{ $reservation->id_restaurant }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="date" id="date"
            placeholder="date" value="{{ $reservation->date }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="price" id="price"
            placeholder="price" value="{{ $reservation->price }}">
    </div>
    <div>
        <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection
