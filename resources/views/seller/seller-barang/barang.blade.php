@extends('seller.layouts.temp-main')

@section('barang-content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Unique Code</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no_barang = 1; ?>
        @foreach ($barang as $data)
        <tr>
            <th scope="row">{{ $no_barang++ }}</th>
            <td><img src="{{ url('foto_barang/'.$data->foto_barang) }}" width="100px"></td>
            <td>{{ $data->unique_code_barang }}</td>
            <td>{{ $data->nama_barang }}</td>
            <td>{{ $data->harga_barang }}</td>
            <td>{{ $data->ket_barang }}</td>
            <td>
                <a href="" class="btn btn-success"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection