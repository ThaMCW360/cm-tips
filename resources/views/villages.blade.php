@extends('layout.app')
@include('layout.header')
@section('content')
<main class="row">
<div class="col-lg-2"></div>
<div id="lipsum" class="box col-lg-8 row">
<div class="col-lg-12" style="    background: url(./assets/images/village.png);
    height: 10rem;
    color: white;
    display: flex;
    justify-items: center;
    text-align: center;
    align-items: center;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;">
            <h1 class="text-center w-100">Coin Master Village List<br> and Building Cost</h1>
</div>
<div class="col-lg-2"></div>
<div class="col-lg-8">
<table width="100%">
    <tr><th>Number</th><th>Name</th><th>Cost</th></tr>
    @for($i=0; $i<count($villages); $i++)
    <tr>
<td>{{$villages[$i]['number']}}</td><td>{{$villages[$i]['name']}}</td><td>
@if($villages[$i]['cost']==0)
?
@endif
@if($villages[$i]['cost']>0)
{{$villages[$i]['cost']}}
@if($villages[$i]['cost_ratio']===0)
million
@endif
@if($villages[$i]['cost_ratio']===1)
billion
@endif
@if($villages[$i]['cost_ratio']==2)
trillion
@endif


@endif

</td>
    </tr>
    @endfor
</table>
</div>
</div>
</main>
