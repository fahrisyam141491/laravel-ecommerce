<?php

namespace App\Http\Controllers\C_Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_Seller\M_Barang;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class C_Barang extends Controller
{
    public function __construct() {
        $this->M_Barang = new M_Barang();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'barang' => $this->M_Barang->allData(),
        ];
        return view('seller.seller-barang.barang', $data);
    }

    public function add()
    {
        return view('seller.seller-barang.add');
    }

    public function store()
    {
        Request()->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'ket_barang' => 'required',
            'foto_barang' => 'required'
        ]);

        $file = Request()->foto_barang;
        $fileName = Request()->nama_barang.'.'.$file->extension();
        $file->move(public_path('foto_barang'), $fileName);

        $data = [
            'unique_code_barang' => str::random(5),
            'nama_barang' => Request()->nama_barang,
            'harga_barang' => Request()->harga_barang,
            'ket_barang' => Request()->ket_barang,
            'foto_barang' => $fileName,
        ];

        $this->M_Barang->addData($data);

        return redirect()->route('seller-tab')->with('sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function viewdelete() {
        $data = [
            'barang' => $this->M_Barang->allData(),
        ];
        return view('seller.seller-barang.delete', $data);
    }

    public function delete()
    {
        $this->M_Barang->deleteAll();
        
        return redirect()->route('delete-barang')->with('sukses');
    }

    public function deleteall()
    {
        $this->M_Barang->deleteAll();
        
        return redirect()->route('delete-barang')->with('sukses');
    }
}
