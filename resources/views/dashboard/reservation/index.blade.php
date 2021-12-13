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
                    <form action="{{ route('reservation.destroy', $reservation->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button href="{{ route('reservation.show', $reservation->id) }}" class="btn btn-danger">Eliminar</button></td>
                    </form>
                </tr>
            @endforeach

            </tfoot>
    </table>
    {{ $reservations-> links()}}
@endsection



