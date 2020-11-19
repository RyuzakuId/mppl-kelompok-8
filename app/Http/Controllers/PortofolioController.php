<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;

class PortofolioController extends Controller
{
    public function get_all_porto ()
    {
        $portofolios = Portofolio::all();

        return response()->json([
            'success' => true,
            'message' => 'List Semua Portofolio',
            'data'    => $portofolios
        ], 200);
    }

    public function get_porto ($id)
    {
        $portofolio = Portofolio::whereId($id)->first();
        
        if($portofolio){
            return response()->json([
                'success' => true,
                'message' => 'Detail Portofolio',
                'data'    => $portofolio
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Portofolio Tidak Ditemukan',
                'data'    => ''
            ], 404);
        }
    }

    public function store (Request $request) 
    {
        //return $request->all();
        $portofolio = new Portofolio;
        $portofolio->category_id = $request->category_id;
        $portofolio->img_dir = $request->img;

        $portofolio->save();

        return response()->json([
            'success' => true,
            'message' => 'Portofolio Tersimpan!',
            'data'    => $portofolio
        ], 201);
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::whereId($id)->first();

        if ($portofolio) {
            $portofolio->delete();
            return response()->json([
                'success' => true,
                'message' => 'Portofolio Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Portofolio Tidak Ditemukan!',
            ], 404);
        }
    }
}
