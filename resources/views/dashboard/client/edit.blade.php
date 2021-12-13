@extends('dashboard.master')
@section('content')
    <br>
    <h4>Editar cliente</h4><br>
    <form action="{{ route('client.update', $client->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.client._form')</form>
@endsection