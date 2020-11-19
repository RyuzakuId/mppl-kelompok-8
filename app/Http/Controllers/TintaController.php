<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tinta;

class TintaController extends Controller
{
    public function get_all_tinta () 
    {
        $tintas = Tinta::all();

        return response()->json([
            'success' => true,
            'message' => 'List Semua Tinta',
            'data'    => $tintas
        ], 200);
    }

    public function store(Request $request)
    {
        // Make new Tinta
        $tinta = new Tinta;
        $tinta->nama = $request->nama;
        $tinta->harga = $request->harga;

        $tinta->save();

        return response()->json([
            'success' => true,
            'message' => 'Tinta Tersimpan'
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $tinta = Tinta::whereId($id)->first();
        if($tinta){
            $tinta->nama = $request->nama ? $request->nama : $tinta->nama;
            $tinta->harga = $request->harga ? $request->harga : $tinta->harga;

            $tinta->save();
            return response()->json([
                'success' => true,
                'message' => 'Tinta Berhasil Diupdate!'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tinta Tidak Ditemukan!'
            ], 404);
        }
    }

    public function destroy($id)
    {
        $tinta = Tinta::whereId($id)->first();

        if ($tinta) {
            $tinta->delete();
            return response()->json([
                'success' => true,
                'message' => 'Tinta Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tinta Tidak Ditemukan!',
            ], 404);
        }
    }
}
