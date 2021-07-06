<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/summernote/summernote-bs4.min.css">
</head>
<style>
.container{ 
    position: relative;
    height: 100vh;
    background: #343A40;
}
.container .sosmed{
    width: 100%;
    height: 3vh;
    margin-bottom: 10px;
    background: #b9b8b8;
}
.container .sosmed a{
    color: black;
}
.container .main-profile{
    width: 100%;
    height: 20%;
}
.container .main-nav{
    margin-top: 10px;
    width: 100%;
    height: 7vh;
}
.container .main-content{
    width: 100%;
    height: 65vh;
    /* background: red; */
    display: flex;
    box-sizing: border-box;
}
.container .main-content .barang{
    width: 50%;
    background: #b9b8b8;
    border-bottom-left-radius: 20px;
    border-top: 5px solid #9b9898;
    border-right: 5px solid #9b9898;
    padding-left: 8px;
    overflow: auto;
}
.container .main-content .status{
    width: 50%;
    background: #9b9898;
    border-bottom-right-radius: 20px;
    border-top: 5px solid #b9b8b8;
    border-left: 5px solid #b9b8b8;
    padding-left: 8px;
    overflow: auto;
}
.container .main-content .barang::-webkit-scrollbar{
    display: block;
    border-radius: 20px;
    width: 5px;
    height: 10px;
}
.container .main-content .barang::-webkit-scrollbar-thumb{
    background: #9b9898;
    border-radius: 20px;

}
.container .main-content .barang::-webkit-scrollbar-corner{
    background: #b9b8b8;
}
.container .main-content .status::-webkit-scrollbar{
    display: block;
    border-radius: 20px;
    width: 5px;
    height: 10px;
}
.container .main-content .status::-webkit-scrollbar-thumb{
    background: #343A40;
    border-radius: 20px;

}
.container .main-content .status::-webkit-scrollbar-corner{
    background: #9b9898;
}
.log-out button{
        display: block;
        position: fixed;
        right: 20px;
        bottom: 20px;
        color: wheat;
        padding: 10px 12px;
        border-radius: 50px;
        background: gray;
    }
</style>
<body>
    <div class="container">
        <div class="sosmed">
            <a href="/seller-tab" class="float float-right mr-4"><h6>Seller Tab</h6></a>
        
            <a href="/" class="float float-right mr-4"><h6>Home</h6></a>
        </div>
        <div class="main-profile">
            @include('seller.layouts.inc.seller-profile')
        </div>
        <div class="main-nav">
            @include('seller.layouts.inc.nav')
        </div>
        <div class="main-content">
            <div class="barang">
                @yield('barang-content')
            </div>
            <div class="status">
                @yield('status-content')
            </div>
        </div>
        <div class="log-out">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button>
                    <i class="fas fa-door-open"></i>
                </button>
            </form>
        </div>
    </div>
</body>
<!-- jQuery -->
<script src="{{ asset('adminlte3') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte3') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte3') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte3') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte3') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte3') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('adminlte3') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte3') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte3') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('adminlte3') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte3') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte3') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte3') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte3') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte3') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte3') }}/dist/js/pages/dashboard.js"></script>
</body>
</html>
