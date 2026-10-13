<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tanuloszoba extends Model
{
    protected $table='tanuloszobak';

    protected $fillable = [
        'szobatipus_id',
        'szoba_nev',
        'emelet',
        'ferohely'
    ];

    public function szobatipus()
    {
        return $this->belongsTo(Szobatipus::class, 'szobatipus_id');
    }
}
