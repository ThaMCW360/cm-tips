@extends('layout.app')
@include('layout.header')
@section('content')
<main class="row">
<div class="col-lg-2"></div>
<div id="lipsum" class="box col-lg-8">
<h1>Welcome to our website dedicated to the game Coin Master</h1>
<h3>Here you will find tips and tricks for the game. And also aids useful in the game.</h3>
<H4> Where to get free spins?  What's up with chests?  How much does this village cost?  If you have any of these questions, you've come to the right place.  In addition, you will find tips on how to play to win, without using hacks and cheats. </H4>
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
    background-size: contain;"><a href="spins">Free spins</a></h2><hr><div class="overview"><a href="spins">Links to free spins and coins</a></div></div>
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
    background-size: contain;"><a href="villages">Villages</a></h2><hr><div class="overview"><a href="villages">List and costs of building villages</a></div></div>
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
    background-size: contain;"><a href="chests">Chests</a></h2><hr><div class="overview"><a href="chests">Informations about Coin Master chests</a></div></div>
    </div>

</div>
</main>
@endsection