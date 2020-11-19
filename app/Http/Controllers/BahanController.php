<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahan;

class BahanController extends Controller
{
    public function get_all_bahan () 
    {
        $bahans = Bahan::all();

        return response()->json([
            'success' => true,
            'message' => 'List Semua Bahan',
            'data'    => $bahans
        ], 200);
    }

    public function store(Request $request)
    {
        // Make new Bahan
        $bahan = new Bahan;
        $bahan->nama = $request->nama;
        $bahan->harga = $request->harga;

        $bahan->save();

        return response()->json([
            'success' => true,
            'message' => 'Bahan Tersimpan'
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $bahan = Bahan::whereId($id)->first();
        if($bahan){
            $bahan->nama = $request->nama ? $request->nama : $bahan->nama;
            $bahan->harga = $request->harga ? $request->harga : $bahan->harga;

            $bahan->save();
            return response()->json([
                'success' => true,
                'message' => 'Bahan Berhasil Diupdate!'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Bahan Tidak Ditemukan!'
            ], 404);
        }
    }

    public function destroy($id)
    {
        $bahan = Bahan::whereId($id)->first();

        if ($bahan) {
            $bahan->delete();
            return response()->json([
                'success' => true,
                'message' => 'Bahan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Bahan Tidak Ditemukan!',
            ], 404);
        }
    }
}
