<?php

namespace App\Models;

use App\Models\Rol;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identification',
        'address',
        'phone_number',
        'email'
    ];

}
