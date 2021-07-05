<style>
    .nav{
        position: relative;
        top: 10px;
        width: 100%;
        height: 7vh;
        display: flex;
        background: #D39D38;
    }
    .nav .logo{
        width: 20%;
        height: 7vh;
        padding-left: 20px;
        font-family: Arial, Helvetica, sans-serif;
        font-variant: small-caps;
        font-size: 30px;
    }
    .search{
        width: 30%;
        margin-left: 20%;
        height: 7vh;
    }
    .search input{
        width: 70%;
        margin-left: 5%;
        margin-top: 1vh;
        height: 5vh;
    }
    .search button{
        float: right;
        width: 15%;
        margin-right: 5%;
        border: none;
        margin-top: 1vh;
        height: 5vh;
    }
    .profile-user{
        width: 25%;
        margin-left: 5%;
        display: flex;
        height: 7vh;
    }
    .profile-user .login{
        width: calc(85% / 2);
        color:#fff;
        margin-left: 5%;
        border-radius: 20px;
        margin-right: 5%;
        margin-top: 1vh;
        height: 5vh;
        text-align: center;
        line-height: 5vh;
    }
    .profile-user .register{
        width: calc(85% / 2);
        color:#fff;
        border-radius: 20px;
        margin-top: 1vh;
        height: 5vh;
        text-align: center;
        line-height: 5vh;
    }
    .profile-user .login:hover{
        border: 1px solid #000;
    }
    .profile-user .register:hover{
        border: 1px solid #000;
    }
    .profile{
        width: 25%;
        margin-left: 5%;
        height: 7vh;
    }
    .profile .kotak-profile{
        width: 50%;
        margin-top: 1vh;
        margin-right: 20px;
        float: right;
        height: 5vh;
    }
    .profile .kotak-menu{
        width: 35%;
        margin-left: 1vh;
        margin-top: 1vh;
        height: 5vh;
        display: flex;
    }
    .kotak-profile .foto{
        width: 30%;
        float: right;
        height: 5vh;
        background-repeat: no-repeat;
        border-radius: 20px;
        border: 1px solid white;
    }
    .kotak-profile .nama{
        width: 70%;
        float: right;
        text-align: center;
        text-transform: lowercase;
        line-height: 5vh;
        height: 5vh;
    }
    .kotak-menu .keranjang{
        width: 50%;
        height: 5vh;
        text-align: center;
        color:#fff;
        line-height: 5vh;
    }
    .kotak-menu .wish-list{
        width: 50%;
        color:#fff;
        height: 5vh;
        text-align: center;
        line-height: 5vh;
    }
    .kotak-menu .keranjang:hover{
        color: #000;
    }
    .kotak-menu .wish-list:hover{
        color: #000;
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
<link rel="stylesheet" href="{{ asset('adminlte3') }}/plugins/fontawesome-free/css/all.min.css">
<div class="nav">
    <div class="logo">Tokoku <span>.com</span></div>
    <div class="search">
        <form action="">
            <input type="text" placeholder="Search">
            <button><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    @guest
    @if (Route::has('login') && Route::has('register'))
    <div class="profile-user">
        <a href="/login" class="login">Login</a>
        <a href="/register" class="register">Register</a>
    </div>
    @endif
    @else
    <div class="profile">
        <div class="kotak-profile">
            <img src="{{ url('images/lonely-wolf.png') }}" class="foto">
            <div class="nama">{{ auth()->user()->name }}</div>
        </div>
        <div class="kotak-menu">
            <a href="" class="keranjang"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
            <a href="" class="wish-list"><i class="fa fa-heart" aria-hidden="true"></i></a>
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
    @endguest
</div>