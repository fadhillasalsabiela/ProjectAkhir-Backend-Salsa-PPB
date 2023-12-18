<?php

namespace App\Http\Controllers;

use App\Models\Gunung;
use Illuminate\Http\Request;

class GunungController extends Controller
{   
    public function getgunung(){
        $data = Gunung::all();
        if($data){
            return response()->json([
                'nama_gunung'=>200,
                'message'=>'berhasil menampilkan data',
                'data'=> $data
            ]);
        }
        return response()->json([
            'status'=> 404,
            'message'=> 'Data tidak tersedia'
        ]);
    }
    public function getgunungkat($id_kategori)
    {
        $data = Gunung::where('id_kategori', $id_kategori)->get();
        return response()->json(['data' => $data]);
    }

    public function postgunung(Request $request){
        $data = Gunung::create([
            'nama_gunung' => $request->nama_gunung,
            'id_kategori' => $request->id_kategori,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'imgmaps' => $request->imgmaps,
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
