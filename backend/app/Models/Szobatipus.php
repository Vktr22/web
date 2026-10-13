<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szobatipus extends Model
{
    protected $table = 'szobatipusok';

    protected $fillable = [
        'tipus_nev'
    ];


    public function szobak(){
        return $this->hasMany( Tanuloszoba::class, 'szobatipus_id');
    }
}
