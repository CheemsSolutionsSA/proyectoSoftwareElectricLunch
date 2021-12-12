@extends('dashboard.master')
@section('content')
    <br>
    <h4>Editar restaurante</h4><br>
    <form action="{{ route('restaurant.update', $restaurant -> id) }}" method="POST">
        @method('PUT')
        @include('dashboard.restaurant._form')</form>
@endsection