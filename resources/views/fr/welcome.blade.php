@extends('layout.fr.app')
@include('layout.fr.header')
@section('content')
<main class="row">
<div class="col-lg-2"></div>
<div id="lipsum" class="box col-lg-8">
<h1>Bienvenue sur notre site dédié au jeu Coin Master</h1>
<h3>Vous trouverez ici des trucs et astuces pour le jeu. Et aussi des aides utiles dans le jeu.</h3>
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
    background-size: contain;"><a href="/fr/spins">Tours gratuits</a></h2><hr><div class="overview"><a href="/fr/spins">Liens vers des tours gratuits et des pièces</a></div></div>
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
    background-size: contain;"><a href="/fr/villages">Villages</a></h2><hr><div class="overview"><a href="/fr/villages">Liste et coûts de construction des villages</a></div></div>
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
    background-size: contain;"><a href="/fr/chests">Coffres</a></h2><hr><div class="overview"><a href="/fr/chests">Informations sur les coffres Coin Master</a></div></div>
    </div>

</div>
</main>
@endsection