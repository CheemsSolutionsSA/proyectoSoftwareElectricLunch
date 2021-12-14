@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{ auth()->user()->name }} <br>
                    
                    <div class="card-group">
                        <div class="card mx-1">
                          <img class="img-thumbnail" src="https://image.freepik.com/vector-gratis/hombre-vestido-mascara-medica-cliente_52683-41296.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Restaurantes</h5>
                            <p class="card-text">Gestión restaurante</p>
                            <div class="col align-self-end">
                                <a class="btn btn-success" href="dashboard/restaurant">Ingresar</a>
                            </div>
                          </div>
                        </div>
                        <div class="card mx-1">
                          <img class="img-thumbnail" src="https://image.freepik.com/vector-gratis/ningun-momento-ilustracion-concepto_114360-4209.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text">Gestión de clientes</p>
                            <a class="btn btn-success" href="dashboard/client">Ingresar</a>
                          </div>
                        </div>
                        <div class="card mx-1">
                          <img class="img-thumbnail" src="https://image.freepik.com/vector-gratis/reserva-citas-hombre-telefono-inteligente_23-2148564095.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Reservación</h5>
                            <p class="card-text">Gestión de reservas</p>
                            <a class="btn btn-success" href="dashboard/reservation">Ingresar</a>
                          </div>
                        </div>
                        <div class="card mx-1">
                            <img class="img-thumbnail" src="https://image.freepik.com/vector-gratis/pack-moderno-avatares-siluetas_23-2147675478.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Usuarios</h5>
                              <p class="card-text">Gestion usuarios.</p>
                              <a class="btn btn-success" href="dashboard/user">Ingresar</a>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
