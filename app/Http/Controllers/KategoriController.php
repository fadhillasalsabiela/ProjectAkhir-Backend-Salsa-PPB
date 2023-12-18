<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{   
    public function getkategori(){
        $data = Kategori::all();
        if($data){
            return response()->json([
                'nama_kategori'=>200,
                'message'=>'berhasil menampilkan data',
                'data'=> $data
            ]);
        }
        return response()->json([
            'status'=> 404,
            'message'=> 'Data tidak tersedia'
        ]);
    }
    public function postkategori(Request $request){
        $data = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'gambar' => $request->gambar,
            

        ]);
        if($data){
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil Menambahkan Data',
                'data'=> $data

            ]);
        }
        return response()->json([
            'status' => 404,
            'message' => 'Gagal Menambahkan Data'
        ]);
    }
}
