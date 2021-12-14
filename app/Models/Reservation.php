<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reservation',
        'id_restaurant',
        'date',
        'price',
        'cant_chairs',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
