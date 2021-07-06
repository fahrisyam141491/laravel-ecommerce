<style>
.nav{
    width: 100%;
    height: 7vh;
    display: flex;
    text-align: center;
    line-height: 6vh;
}
div.crud-barang{
    display: flex;
    width: 50%;
    height: 7vh;
}
div.proses-barang{
    display: flex;
    width: 50%;
    height: 7vh;
}
div.crud-barang a{
    width: 50%;
    height: 6vh;
    display: block;
}
div.proses-barang a{
    width: 50%;
    height: 6vh;
    display: block;
}
div.crud-barang a.active{
    border: 5px solid #343A40;
    line-height: 4.5vh;
}
</style>

<div class="nav">
    <div class="crud-barang">
        <a href="/seller-tab" class="semua-barang bg-primary {{ Request()->is('seller-tab') ? 'active' : '' }}">Semua Barang</a>
        <a href="/seller-tab/add-barang" class="tambah-barang bg-info {{ Request()->is('seller-tab/add-barang') ? 'active' : '' }}">Tambah Barang</a>
        <a href="/seller-tab/delete" class="hapus-barang bg-secondary {{ Request()->is('seller-tab/delete') ? 'active' : '' }}">Hapus Barang</a>   
    </div>
    <div class="proses-barang">
        <a href="" class="status-pesanan bg-warning">Status Pesanan</a>
        <a href="" class="konfirmasi-pesanan bg-success">Konfirmasi Pesanan</a>
        <a href="" class="kirim-pesanan bg-danger">Kirim Pesanan</a>
    </div>
</div>