<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'message' => 'list semua artikel',
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
        //validate data
        $validator = Validator::make($request->all(), [
            'judul'     => 'required',
            'isi'       => 'required'
        ], 
            [
                'judul.required' => 'Masukan judul !!',
                'isi.required'   => 'Masukan isi artikel !',
            ]
        );

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Isi bidang yang kosong',
                'data'    => $validator->errors()
            ], 400);
        }else {
            $artikel = Artikel::create([
                'judul' => $request->input('judul'),
                'isi' => $request->input('isi')
            ]);

            if($artikel){
                return response()->json([
                    'success' => true,
                    'message' => 'Artikel Berhasil Disimpan!'
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Artikel Gagal Disimpan!'
                ], 400);
            }
        }
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
                'message' => 'Detail artikel!',
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
        //validate data
        $validator = Validator::make($request->all(), [
            'judul'     => 'required',
            'isi'       => 'required',
        ],
            [
                'judul.required' => 'Masukkan judul Artikel !',
                'isi.required'   => 'Masukkan isi Artikel !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $artikel = Artikel::whereId($request->input('id'))->update([
                'judul'     => $request->input('judul'),
                'isi'       => $request->input('isi'),
            ]);


            if ($artikel) {
                return response()->json([
                    'success' => true,
                    'message' => 'Artikel Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Artikel Gagal Diupdate!',
                ], 500);
            }

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
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        if ($artikel) {
            return response()->json([
                'success' => true,
                'message' => 'Artikel Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Artikel Gagal Dihapus!',
            ], 500);
        }
    }
}
