@extends('dashboard.master')
@section('content')

    <div class="mb-3 row">
        <h1 class="mx-auto">Cliente</h1>
    </div>
    <div class="form-group">

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="name" id="name"
                    placeholder="name" value="{{ $user->name }}">

            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="email" id="email"
                    placeholder="email" value="{{ $user->email }}">

            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-7">
                <input readonly class="form-control" type="text" name="password" id="password" placeholder="password"
                    value="{{ $user->password }}">
            </div>
        </div>

    </div>

    <div>
        <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Aceptar</a>
    </div>
@endsection