@extends('dashboard.master')
@section('content')
    <a href="{{ route('restaurant.create') }}" class="btn btn-info btn-small mb-3">Create Restaurant</a>
    <h6>List Restaurants</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>NIT</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Capacidad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($restaurants as $restaurant)
                <tr>

                    <td>{{ $restaurant->NIT }}</td>
                    <td>{{ $restaurant->name }}</td>
                    <td>{{ $restaurant->address }}</td>
                    <td>{{ $restaurant->phone_number }}</td>
                    <td>{{ $restaurant->email }}</td>
                    <td>{{ $restaurant->capacity }}</td>
                    <td><a href="{{ route('restaurant.edit', $restaurant->id) }}" class="btn btn-info">Editar</a></td>
                    <td><a href="{{ route('restaurant.show', $restaurant->id) }}" class="btn btn-info">Ver</a></td>
                    <td><button data-toggle="modal" class="btn btn-danger" data-bs-toggle="modal"
                            data-target="#exampleModal" data-id="{{ $restaurant->id }}">Eliminar</button></td>
                </tr>
            @endforeach

            </tfoot>
    </table>
@endsection

{{ $restaurants-> links()}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro deseas eliminar el restaurante?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('restaurant.destroy', $restaurant->id) }}"
                    data-action="{{ route('restaurant.destroy', $restaurant->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

