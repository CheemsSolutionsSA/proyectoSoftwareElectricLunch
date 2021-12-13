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
                    <td><button data-toggle="modal" class="btn btn-danger" data-bs-toggle="modal"
                            data-target="#exampleModal" data-id="{{ $client->id }}">Eliminar</button></td>
                </tr>
            @endforeach

            </tfoot>
    </table>
@endsection

{{ $clients-> links()}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">
                ¿Seguro deseas eliminar el cliente?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('client.destroy', $client->id) }}"
                    data-action="{{ route('client.destroy', $client->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>

