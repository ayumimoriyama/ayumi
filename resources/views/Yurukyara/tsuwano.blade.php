@extends('adminlte::page')

@section('title', '津和野町')

@section('content_header')
<div class="tsuwano-title">
    <h1>津和野町のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="tsuwano-text">
    <img src="images/つわみん.png" alt='' width="500px">
    <h5>つわみん</h5>
    <p class="project-link"><a href="http://www.town.tsuwano.lg.jp/" target="_blank">津和野町のホームページ</a></p>
</div>

@stop

<style>
    .tsuwano-title{
        text-align: center;
    }
    .tsuwano-text{
        justify-content: center;
        text-align: center;
    }
    .tsuwano-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>