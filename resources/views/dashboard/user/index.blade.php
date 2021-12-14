@extends('dashboard.master')
@section('content')  
    <div class="mb-3 row">
        <h1 class="mx-auto">Lista de usuarios</h1>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-info">Ver</a></td>
                </tr>
            @endforeach
            </tfoot>           
    </table>
    {{ $users-> links()}}
@endsection
