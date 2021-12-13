@extends('dashboard.master')
@section('content')
    <br>
    <h4>Crear cliente</h4><br>
    <form action="{{ route('client.store') }}" method="POST">
        @include('dashboard.client._form')</form>
@endsection
