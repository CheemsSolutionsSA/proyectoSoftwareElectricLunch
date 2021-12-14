@extends('dashboard.master')
@section('content')
    <div class="mb-3 row">
        <h1 class="mx-auto">Lista de reservas</h1>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Número reserva</th>
                <th>Nombre restaurante</th>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>

                    <td>{{ $reservation->id_reservation }}</td>
                    <td>{{ $reservation->id_restaurant }}</td>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->price }}</td>
                    <td>{{ $reservation->cant_chairs }}</td>
                    <td><a href="{{ route('reservation.edit', $reservation->id) }}" class="btn btn-info">Editar</a></td>
                    <td><a href="{{ route('reservation.show', $reservation->id) }}" class="btn btn-info">Ver</a></td>
                    <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button href="{{ route('reservation.show', $reservation->id) }}"
                                class="btn btn-danger">Eliminar</button></td>
                    </form>
                </tr>
            @endforeach

            </tfoot>
    </table>
    <a href="{{ route('reservation.create') }}" class="btn btn-info btn-small mb-3">Crear Reserva</a>
    {{ $reservations->links() }}

@endsection
