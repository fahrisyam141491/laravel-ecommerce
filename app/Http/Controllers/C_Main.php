<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Seller\M_Barang;

class C_Main extends Controller
{
    public function __construct() {
        $this->M_Barang = new M_Barang();
    }

    public function index() {
        $data = [
            'barang' => $this->M_Barang->allData(),
        ];
        return view('all.index', $data);
    }
}