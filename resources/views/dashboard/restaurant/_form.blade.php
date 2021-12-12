@csrf
<div class="form-group">



    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="name" id="name" placeholder="Nombre restaurante"
                value="{{ old('name', $restaurant->name) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nit</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="NIT" id="NIT" placeholder="Nit"
                value="{{ old('NIT', $restaurant->NIT) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="address" id="address" placeholder="Dirección"
                value="{{ old('address', $restaurant->address) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="email" id="email" placeholder="Correo Electronico"
                value="{{ old('email', $restaurant->email) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Telefono</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="phone_number" id="phone_number"
                placeholder="Número de Telefono" value="{{ old('phone_number', $restaurant->phone_number) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Capacidad</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="capacity" id="capacity" placeholder="Número de sillas"
                value="{{ old('capacity', $restaurant->capacity) }}">
        </div>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
</div>
