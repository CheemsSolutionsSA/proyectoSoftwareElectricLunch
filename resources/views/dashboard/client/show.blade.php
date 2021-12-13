@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="name" id="name"
            placeholder="cliente" value="{{ $client->name }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="identification" id="identification"
            placeholder="identification" value="{{ $client->identification }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="address" id="address"
            placeholder="address" value="{{ $client->address }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="email" id="email"
            placeholder="email" value="{{ $client->email }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="phone_number" id="phone_number"
            placeholder="phone_number" value="{{ $client->phone_number }}">
    </div>
    <div>
        <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection
