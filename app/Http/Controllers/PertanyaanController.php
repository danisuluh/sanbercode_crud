<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel; //mengarah ke kelas PertanyaanModel bukan file

class PertanyaanController extends Controller
{
    //publik function create untuk @create
    public function create (){
        return view ('pertanyaan.form');
    }
    //publik function menyimpan (@store)
    public function store (Request $request){
     
        $new_item = PertanyaanModel::save($request->all());


        return redirect('pertanyaan');
    }
        
    //publik function create untuk @create
    public function index (){
        $items = PertanyaanModel::get_all(); 
        //dd($items);
        return view ('pertanyaan.index',compact('items'));
    }
    public function edit($id)
    {
        $pertanyaans = Pertanyaan::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaans'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $pertanyaans = Pertanyaan::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function hapus($id)
    {
        // dd($request);
        $deleted = Pertanyaan::hapus($id);
        return redirect('/pertanyaan');
    }

}
