@extends('dashboard.master')
@section('content')
    <a href="{{ route('reservation.create') }}" class="btn btn-info btn-small mb-3">Crear Reserva</a>
    <h6>Lista de reservas</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Número reserva</th>
                <th>Identificación cliente</th>
                <th>Identificación restaurante</th>
                <th>Fecha</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>

                    <td>{{ $reservation->id_reservation }}</td>
                    <td>{{ $reservation->id_client }}</td>
                    <td>{{ $reservation->id_restaurant }}</td>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->price }}</td>
                    <td><a href="{{ route('reservation.edit', $reservation->id) }}" class="btn btn-info">Editar</a></td>
                    <td><a href="{{ route('reservation.show', $reservation->id) }}" class="btn btn-info">Ver</a></td>
                    <td><button data-toggle="modal" class="btn btn-danger" data-bs-toggle="modal"
                            data-target="#exampleModal" data-id="{{ $reservation->id }}">Eliminar</button></td>
                </tr>
            @endforeach

            </tfoot>
    </table>
@endsection

{{ $reservations-> links()}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">
                ¿Seguro deseas eliminar la reserva?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('reservation.destroy', $reservation->id) }}"
                    data-action="{{ route('reservation.destroy', $reservation->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>

