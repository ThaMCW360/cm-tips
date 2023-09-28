@extends('layout.de.app')
@include('layout.de.header')
@section('content')
<main class="row">
<div class="col-lg-2"></div>
<div id="lipsum" class="box col-lg-8">
<h1>Willkommen auf unserer Website zum Spiel Coin Master</h1>
<h3>Hier finden Sie Tipps und Tricks zum Spiel. Und auch nützliche Hilfsmittel im Spiel.</h3>
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
    background-size: contain;"><a href="/de/spins">Freispiele</a></h2><hr><div class="overview"><a href="/de/spins">Links zu Freispielen und Münzen</a></div></div>
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
    background-size: contain;"><a href="/de/villages">Dörfer</a></h2><hr><div class="overview"><a href="/de/villages">Liste und Kosten für den Bau von Dörfern</a></div></div>
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
    background-size: contain;"><a href="/de/chests">Truhen</a></h2><hr><div class="overview"><a href="/de/chests">Informationen zu Coin Master Truhen</a></div></div>
    </div>

</div>
</main>
@endsection