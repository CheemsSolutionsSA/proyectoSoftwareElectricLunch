@extends('dashboard.master')
@section('content')
    <a href="{{ route('client.create') }}" class="btn btn-info btn-small mb-3">Crear Cliente</a>
    <h6>Lista de clientes</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Identificación</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>

                    <td>{{ $client->identification }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->phone_number }}</td>
                    <td>{{ $client->email }}</td>
                    <td><a href="{{ route('client.edit', $client->id) }}" class="btn btn-info">Editar</a></td>
                    <td><a href="{{ route('client.show', $client->id) }}" class="btn btn-info">Ver</a></td>
                    <form action="{{ route('client.destroy', $client->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button href="{{ route('client.show', $client->id) }}" class="btn btn-danger">Eliminar</button></td>
                    </form>
                </tr>
            @endforeach

            </tfoot>
    </table>
    {{ $clients-> links()}}
@endsection


