@csrf
<div class="form-group">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Numero de reserva</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="id_reservation" id="id_reservation"
                placeholder="Numero reserva" value="{{ old('id_reservation', $reservation->id_reservation) }}">
        </div>
    </div>

    <div class="form-group mb-3 row">
        <label for="id_restaurant" class="col-sm-2 col-form-label">Restaurante</label>
        <div class="col-sm-7">
            <select class="custom-select" name="id_restaurant" id="id_restaurant" aria-label="Default">
                <option selected disabled>Selecciona una opción</option>
                @foreach ($restaurants as $name => $id)
                    <option value="{{ $name }}">
                        {{ $name }}
                    </option>
                @endforeach
            </select>
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
        <label for="price" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="price" id="price" placeholder="Precio"
                value="{{ old('price', $reservation->price) }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="cant_chairs" class="col-sm-2 col-form-label">numero de sillas</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="cant_chairs" id="cant_chairs" placeholder="numero de sillas"
                value="{{ old('cant_chairs', $reservation->cant_chairs) }}">
        </div>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
</div>
