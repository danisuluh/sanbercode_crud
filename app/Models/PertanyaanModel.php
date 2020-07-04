<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
  public static function get_all(){
    $items = DB::table ('pertanyaan')->get();
    return $items;

  }

  public static function save($data){ //diharapkan datanya nanti dirubah menjadi array assoc
    //hilangkan _token
    unset($data["_token"]);
    $new_pertanyaan = DB::table('pertanyaan')->insert($data); //insert menerima array assoc

    return $new_pertanyaan;
  }

  public static function find_by_id($id)
  {
      $pertanyaans = DB::table('pertanyaans')->where('id', '=', $id)->first();
      return $pertanyaans;
  }

  public static function update($id, $request)
  {
      $pertanyaans = DB::table('pertanyaans')
          ->where('id', '=', $id)
          ->update([
              'judul' => $request["judul"],
              'isi' => $request["isi"]
          ]);
      return $pertanyaans;
  }

  public static function hapus($id)
  {
      $deleted = DB::table('pertanyaans')
          ->where('id', '=', $id)
          ->delete();
      return $deleted;
  }
}