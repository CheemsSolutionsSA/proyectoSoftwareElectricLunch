@extends('dashboard.master')
@section('content')
    <br>
    <h4>Editar reservación</h4><br>
    <form action="{{ route('reservation.update', $reservation->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.reservation._form')</form>
@endsection