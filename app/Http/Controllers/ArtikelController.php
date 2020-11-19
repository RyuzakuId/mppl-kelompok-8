<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data from artikels table
        $artikels = Artikel::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'List Semua Artikel',
            'data' => $artikels
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->img_dir = $request->img;

        $artikel->save();

        return response()->json([
            'success' => true,
            'message' => 'Artikel Tersimpan',
            'data'    => $artikel
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::whereId($id)->first();

        if ($artikel) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Artikel',
                'data'    => $artikel
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Artikel Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::whereId($id)->first();
        if($artikel){
            $artikel->judul = $request->judul ? $request->judul : $artikel->judul;
            $artikel->isi = $request->isi ? $request->isi : $artikel->isi;
            $artikel->img_dir = $request->img ? $request->img : $artikel->img;

            $artikel->save();
            return response()->json([
                'success' => true,
                'message' => 'Artikel Berhasil Diupdate!'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Artikel Tidak Ditemukan!'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::whereId($id)->first();

        if ($artikel) {
            $artikel->delete();
            return response()->json([
                'success' => true,
                'message' => 'Artikel Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Artikel Tidak Ditemukan!',
            ], 404);
        }
    }
}
