@extends('layout.es.app')
@include('layout.es.header')
@section('content')
<main class="row">
<div class="col-lg-2"></div>
<div id="lipsum" class="box col-lg-8">
<h1>Bienvenido a nuestro sitio web dedicado al juego Coin Master</h1>
<h3>Aquí encontrarás consejos y trucos para el juego. Y también ayudas útiles en el juego.</h3>
<div class="row">
    <div class="col-lg-4">
<div class="mini-box"><h2  style="    background: url(./assets/images/spin.svg);
    height: 7rem;
    color: white;
    display: grid;
    justify-items: center;
    text-align: center;
    align-items: center;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;"><a href="/es/spins">Tiradas gratis</a></h2><hr><div class="overview"><a href="/es/spins">Enlaces a giros gratis y monedas</a></div></div>
    </div>
        <div class="col-lg-4">
<div class="mini-box"><h2  style="    background: url(./assets/images/village.png);
    height: 7rem;
    color: white;
    display: grid;
    justify-items: center;
    text-align: center;
    align-items: center;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;"><a href="/es/villages">Pueblos</a></h2><hr><div class="overview"><a href="/es/villages">Lista y costos de construir aldeas.</a></div></div>
    </div>
        <div class="col-lg-4">
<div class="mini-box"><h2  style="    background: url(./assets/images/chests.png);
    height: 7rem;
    color: white;
    display: grid;
    justify-items: center;
    text-align: center;
    align-items: center;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;"><a href="/es/chests">Cofres</a></h2><hr><div class="overview"><a href="/es/chests">Información sobre los cofres Coin Master</a></div></div>
    </div>

</div>
</main>
@endsection