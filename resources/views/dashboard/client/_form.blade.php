@csrf
<div class="form-group">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="name" id="name" placeholder="Nombre cliente"
                value="{{ old('name', $client->name) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Identificación</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="identification" id="identification" placeholder="identification"
                value="{{ old('identification', $client->identification) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="address" id="address" placeholder="Dirección"
                value="{{ old('address', $client->address) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="email" id="email" placeholder="Correo Electronico"
                value="{{ old('email', $client->email) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Telefono</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="phone_number" id="phone_number"
                placeholder="Número de Telefono" value="{{ old('phone_number', $client->phone_number) }}">
        </div>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
</div>
