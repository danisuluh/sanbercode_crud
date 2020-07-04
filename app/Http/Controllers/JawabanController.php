<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel; //mengarah ke kelas PertanyaanModel bukan file

class JawabanController extends Controller
{

    public function store($pertanyaan_id, Request $request){
        $data = $request->all();
        unset($data["_token"]);
        JawabanModel::save($data);
        return redirect ('/pertanyaan');
    }
    // public function index()
    // {
    //     $jawaban = JawabanController::get_all();
    //     return view('jawaban.index', compact('jawaban'));
    // }

    // public function create()
    // {
    //     return view('jawaban.form');
    // }

    // public function show($pertanyaan_id)
    // {
    //     // mengambil data pegawai berdasarkan id yang dipilih
    //     $jawaban = DB::table('jawaban')
    //         ->select('jawaban.id as id', 'jawaban.isi as isi_jawaban', 'pertanyaan.id as pertanyaan_id', 'pertanyaan.isi as isi_pertanyaan')
    //         ->rightJoin('pertanyaan', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')
    //         ->where('jawaban.pertanyaan_id', $pertanyaan_id)->get();
    //     // passing data pegawai yang didapat ke view edit.blade.php
    //     $jwbn_count = DB::table('jawaban')
    //         ->where('pertanyaan_id', '=', $pertanyaan_id)
    //         ->count();
    //     if ($jwbn_count > 0) {
    //         $pertanyaanya = DB::table('pertanyaan')->distinct()
    //             ->where('id', '=', $pertanyaan_id)
    //             ->get();
    //         return view('jawaban.detail', ['jawaban' => $jawaban, 'pertanyaannya' => $pertanyaanya]);
    //     } else {

    //         return view('jawaban.detail', ['jawaban' => $pertanyaan_id]);
    //     }
    // }


    // public function tambah(Request $request, $pertanyaan_id)
    // {
    //     $data = $request->all();
    //     $data["pertanyaan_id"] = $pertanyaan_id;
    //     // dd($data);
    //     unset($data["_token"]);
    //     $jawaban = Jawaban::save($data);
    //     if ($jawaban) {
    //         // return redirect()->route('jawaban/', ['id' => 1]);
    //         return redirect()->to('jawaban/' . $pertanyaan_id);
    //     }
    // }

    // public function store(Request $request)
    // {

    //     $data = $request->all();
    //     unset($data["_token"]);
    //     $jawaban = Jawaban::save($data);
    //     if ($jawaban) {
    //         return redirect('/jawaban');
    //     }
    // }
}
