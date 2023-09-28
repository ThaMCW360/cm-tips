@extends('layout.pl.app')
@include('layout.pl.header')
@section('content')
<main class="row">
<div class="col-lg-2"></div>
<div id="lipsum" class="box col-lg-8">
<h1> Witamy na naszej stronie poświęconej grze Coin Master </h1>
<h3> Tutaj znajdziesz porady i wskazówki dotyczące gry. A także pomoce przydatne w grze. </h3>
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
    background-size: contain;"><a href="/pl/spins">Darmowe spiny</a></h2><hr><div class="overview"><a href="/pl/spins">Linki do darmowych spinów i monet</a></div></div>
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
    background-size: contain;"><a href="/pl/villages">Wioski</a></h2><hr><div class="overview"><a href="/pl/villages">Lista wiosek i ich koszty budowy</a></div></div>
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
    background-size: contain;"><a href="/pl/chests">Skrzynie</a></h2><hr><div class="overview"><a href="/pl/chests">Informacje na temat skrzyń Coin Master</a></div></div>
    </div>

</div>
</main>
@endsection