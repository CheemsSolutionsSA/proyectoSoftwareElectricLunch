@extends('dashboard.master')
@section('content')  
    <div class="mb-3 row">
        <h1 class="mx-auto">Lista de restaurantes</h1>
    </div>
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
                    <form action="{{ route('restaurant.destroy', $restaurant->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button href="{{ route('restaurant.show', $restaurant->id) }}" class="btn btn-danger">Eliminar</button></td>
                    </form>
                    
                </tr>
            @endforeach

            </tfoot>           
    </table>
    <a href="{{ route('restaurant.create') }}" class="btn btn-info btn-small mb-3">Crear Restaurante</a>
    {{ $restaurants-> links()}}
@endsection
