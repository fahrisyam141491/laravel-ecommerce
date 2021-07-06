@extends('seller.layouts.temp-main')

@section('barang-content')
    <div class="card">
        <div class="card-body">
            <form action="/seller-tab/store-barang" method="POST" enctype="multipart/form-data" class="form-group">
                @csrf
                <div class="row">
                    <div class="input-group col-md-12 mb-3">
                        <label class="">Foto Barang : </label>
                        <input type="file" name="foto_barang" id="inputGroupFile01">
                    </div>
                    <div class="col-md-12">
                        <label for="">Nama Barang :</label>
                        <input type="text" name="nama_barang" id="" class="form-control">
                    </div> 
                    <div class="col-md-12">
                        <label for="">Harga Barang :</label>
                        <input type="number" name="harga_barang" id="" class="form-control">
                    </div> 
                    <div class="col-md-12 ">
                        <label for="">Keterangan Barang :</label>
                        <input type="text" name="ket_barang" id="" class="form-control">
                    </div>
                    <div class="col-md-12 mt-2 position-relative">
                        <button class="btn btn-info">Tambahkan Data</button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection