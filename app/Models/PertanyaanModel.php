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
    $new_item = DB::table('pertanyaan')->insert($data); //insert menerima array assoc

    return $new_item;
  }
}