<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::orderBy('id', 'ASC')->paginate(5);

        return view('dashboard.reservation.index', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::pluck('id', 'name');
        return view('dashboard.reservation.create', [
            'reservation' => new Reservation(),
            'restaurants' => $restaurants,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        Reservation::create($request->validated());
        return back()->with('status', 'Reservación generada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('dashboard.reservation.show', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $restaurants = Restaurant::pluck('id', 'name');

        return view('dashboard.reservation.edit', [
            'reservation' => $reservation,
            'restaurants' => $restaurants,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(
        ReservationRequest $request,
        Reservation $reservation
    ) {
        $reservation->update($request->validated());
        return back()->with('status', 'Reservación modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return back()->with('status', 'Reservación eleminada con éxito');
    }
}
