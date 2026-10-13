<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Tanuloszoba;


class TanuloszobaController extends Controller
{
    public function index(){
        return Tanuloszoba::with('szobatipus_id')->get();
    }

    //szobatipus szerinti szűres:
    public function szures($id)
    {
        return Tanuloszoba::with('szobatipus_id')
            ->where('szobatipus_id', $id)
            ->get();
    }

    //Új szoba felvitele:
    public function store(Request $request)
    {
        $adatok = $request->validate([
            'szobatipus_id' => 'required|foreignId',
            'szoba_nev' => 'required|string',
            'emelet' => 'required|integer',
            'ferohely' => 'required|integer'
        ]);

        return Tanuloszoba::create($adatok);
    }

    //Tanuloszoba törlese:
    public function destroy($id)
    {
        Tanuloszoba::destroy($id);

        return response()->json([
            'ok' => true
        ]);
    }

    //szoba módosit:
    public function update(Request $request, $id)
    {
        $tanuloszoba = Tanuloszoba::findOrFail($id);

        $adatok = $request->validate([
            'szobatipus_id' => 'required|foreignId',
            'szoba_nev' => 'required|string',
            'emelet' => 'required|integer',
            'ferohely' => 'required|integer'
        ]);

        $tanuloszoba->update($adatok);

        return $tanuloszoba;
    }


}


