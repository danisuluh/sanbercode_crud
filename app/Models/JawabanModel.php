<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
  public static function get_all()
  {
      $jawaban = DB::table('jawabans')->get();
      return $jawaban;
  }

  // public static function get_one()
  // {
  //     $jawbaans = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
  //     // $jawaban = DB::table('jawaban')->get();
  //     return $jawbaans;
  // }

  public static function save($data)
  {
      $new_jawaban = DB::table('jawabans')->insert($data);
      return $new_jawaban;
  }

  


}