<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooController extends Controller
{
    public function index() {
        $data = [
            'nama' => 'Denny', 
            'alamat' => 'Bandung'
        ];
        dd($data);
        // return view('foo', $data);
    }

    public function getKJPP() {
        $rows = DB::select("
            SELECT id, nama_kjpp, no_induk, no_izin_kjpp 
            FROM tbl_pstkjpp 
            WHERE id IS NOT NULL
            LIMIT 20
        ", [
            
        ]);

        // dd($rows);
        $data = [
            'i' => 1,
            'items' => $rows
        ];

        return view('page-kjpp', $data);
    }
}
