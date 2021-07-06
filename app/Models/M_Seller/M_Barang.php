<?php

namespace App\Models\M_Seller;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Barang extends Model
{
    // use HasFactory;
    public function allData() {
        return DB::table('tbl_barang')->get();
    }

    public function detailData($id_barang) {
        return DB::table('tbl_barang')->where('id_barang', $id_barang)->first();
    }

    public function addData($data) {
        DB::table('tbl_barang')->insert($data);
    }

    public function deleteData($id_barang) {
        DB::table('tbl_barang')->where('id_barang', $id_barang)->delete();
    }

    public function deleteAll() {
        DB::table('tbl_barang')->delete();
    }
}
