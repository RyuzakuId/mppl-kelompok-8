<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function get_porto_by_cat ($id)
    {
        $category = Category::whereId($id)->first();

        if($category){
            return response()->json([
                'success' => true,
                'message' => 'Detail Portofolio',
                'data'    => $category->portofolios
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Portofolio Tidak Ditemukan',
                'data'    => ''
            ], 404);
        }
    }

    public function get_all_cat () 
    {
        $category = Category::all();

        return response()->json([
            'success' => true,
            'message' => 'List Kategori Portofolio',
            'data'    => $category
        ], 200);
    }

    public function store(Request $request)
    {
        // Make new Category
        $category = new Category;
        $category->nama = $request->nama;
        $category->timestamps = false;

        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Kategori Tersimpan'
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $category = Category::whereId($id)->first();
        if($category){
            $category->nama = $request->nama ? $request->nama : $category->nama;
            $category->timestamps = false;

            $category->save();
            return response()->json([
                'success' => true,
                'message' => 'Kategori Berhasil Diupdate!'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kategori Tidak Ditemukan!'
            ], 404);
        }
    }

    public function destroy($id)
    {
        $category = Category::whereId($id)->first();

        if ($category) {
            $category->delete();
            return response()->json([
                'success' => true,
                'message' => 'Kategori Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kategori Tidak Ditemukan!',
            ], 404);
        }
    }
}
