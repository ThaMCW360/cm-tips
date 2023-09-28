@extends('layout.rus.app')
@include('layout.rus.header')
@section('content')
<main class="row">
<div class="col-lg-2"></div>
<div id="lipsum" class="box col-lg-8">
<h1>Добро пожаловать на наш сайт, посвященный игре Coin Master</h1>
<h3>Здесь вы найдете советы и рекомендации по игре. А также вспомогательные средства, полезные в игре.</h3>
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
    background-size: contain;"><a href="/ru/spins">Бесплатные спины</a></h2><hr><div class="overview"><a href="/ru/spins">Ссылки на фриспины и монеты</a></div></div>
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
    background-size: contain;"><a href="/ru/villages">деревни</a></h2><hr><div class="overview"><a href="/ru/villages">Список и стоимость строительства деревень</a></div></div>
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
    background-size: contain;"><a href="/ru/chests">Сундуки</a></h2><hr><div class="overview"><a href="/ru/chests">Информация о сундуках Coin Master</a></div></div>
    </div>

</div>
</main>
@endsection