<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'NIT',
        'address',
        'phone_number',
        'email',
        'capacity',
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
