@extends('dashboard.master')
@section('content')
    <br>
    <h4>Crear reserva {{auth()->user()->rol}}</h4><br>
    <form action="{{ route('reservation.store') }}" method="POST">
        @include('dashboard.reservation._form')</form>
@endsection
