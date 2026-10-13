<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Szobatipus;

class SzobatipusController extends Controller
{
    public function index(){
        return Szobatipus::all();
    }
}
