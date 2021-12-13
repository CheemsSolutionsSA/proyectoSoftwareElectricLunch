@csrf
<div class="form-group">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Numero de reserva</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="id_reservation" id="id_reservation" placeholder="Numero reserva"
                value="{{ old('id_reservation', $reservation->id_reservation) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Identificación cliente</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="id_client" id="id_client" placeholder="Identificación cliente"
                value="{{ old('id_client', $reservation->id_client) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Identificación restaurante</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="id_restaurant" id="id_restaurant" placeholder="Identificación restaurante"
                value="{{ old('id_restaurant', $reservation->id_restaurant) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Fecha reserva</label>
        <div class="col-sm-7">
            <input class="form-control" type="date" name="date" id="date" placeholder="Fecha reserva"
                value="{{ old('date', $reservation->date) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="price" id="price"
                placeholder="Precio" value="{{ old('price', $reservation->price) }}">
        </div>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
</div>
