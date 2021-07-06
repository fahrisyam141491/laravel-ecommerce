@extends('all.layouts.temp-main')

@section('title', 'Main')

@section('content')
<style>
    ::-webkit-scrollbar{
        display: block;
        width: 5px;
        background: #fff;
        border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb{
        background: #343A40;
        border-radius: 50px;
    }
    .filter{
        width: 100%;
        margin-top: 10px;
        height: 50px;
        display: flex;
        position: relative;
    }
    .with-1{
        width: 18%;
    }
    .with-1 .form-group{
        width: 80%;
        margin-left: 10%;
        height: 30px;
        margin-top: 5px;
    }
    .with-2{
        width: 18%;
    }
    .with-2 .form-group{
        width: 80%;
        height: 30px;
        margin-top: 5px;
    }
    .paginate{
        width: 25%;
        margin-left: 39%;
        /* background: gray; */
    }
    .paginate h6{
        text-align: center;
        color: white;
        word-spacing: 10px;
        line-height: 50px;
    }
</style>
<div class="filter">
    <div class="with-1">
        <div class="form-group">
            <select class="form form-control" name="" id="">
                <option value="" selected>Filter by Date</option>
                <option value="">New to Old</option>
                <option value="">Old to New</option>
            </select>
        </div>
    </div>
    <div class="with-2">
        <div class="form-group">
            <select class="form form-control" name="" id="">
                <option value="" selected>Filter by Name</option>
                <option value="">A to Z</option>
                <option value="">Z to A</option>
            </select>
        </div>
    </div>
    <div class="paginate">
        <h6>1 2 3 4 5 6 7 8 9</h6>
    </div>
</div>
<div class="row pt-3 m-3" style="padding-left: 60px;">
    @foreach ($barang as $data)
    <div class="col-md-3">
        <a href="" style="color: #000;">
            <div class="card" style="width: 12rem;">
                <img src="{{ url('foto_barang/'.$data->foto_barang) }}" alt="" class="card card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama_barang }} - Rp. {{ $data->harga_barang }}</h5>
                    <p class="card-text">{{ $data->ket_barang }}</p>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection

