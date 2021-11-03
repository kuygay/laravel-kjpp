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
            SELECT cab_dr_kjpp, no_izin, tgl_izin FROM tbl_cabkjpp LIMIT 20
        ", []);

        // dd($rows);
        $data = [
            'items' => $rows
        ];

        return view('page-kjpp', $data);
    }
}
