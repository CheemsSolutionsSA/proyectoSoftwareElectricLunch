@extends('dashboard.master')
@section('content')
    <br>
    <h4>Crear restaurante</h4><br>
    <form action="{{ route('restaurant.store') }}" method="POST">
        @include('dashboard.restaurant._form')</form>
@endsection
