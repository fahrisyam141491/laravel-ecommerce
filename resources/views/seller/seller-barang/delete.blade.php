@extends('seller.layouts.temp-main')

@section('barang-content')
<style>
    .icon-deleteall{
        background: #fff;
        color: #C82333;
        border-radius: 10px;
        padding: 10px;
        margin-left: -5px;
        margin-right: 5px;
    }
</style>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <a href="/seller-tab/deleteall" class="btn btn-danger m-3 float-right rounded"><i class="fas fa-skull icon-deleteall"></i> Delete All</a>

        <?php $no_barang = 1; ?>
        @foreach ($barang as $data)
        <tr>
            <th scope="row">{{ $no_barang++ }}</th>
            <td>{{ $data->nama_barang }}</td>
            <td>{{ $data->harga_barang }}</td>
            <td>{{ $data->ket_barang }}</td>
            <td>
                <a href="/seller-tab/delete/{{ $data->id_barang }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection