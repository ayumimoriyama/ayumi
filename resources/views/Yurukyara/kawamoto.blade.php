@extends('adminlte::page')

@section('title', '川本町')

@section('content_header')
<div class="kawamoto-title">
    <h1>川本町のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="kawamoto-text">
    <img src="images/川本えごはちゃん.png" alt='' width="500px">
    <h5>川本えごはちゃん</h5>
    <p class="project-link"><a href="http://www.town.shimane-kawamoto.lg.jp/" target="_blank">川本町のホームページ</a></p>
</div>

@stop

<style>
    .kawamoto-title{
        text-align: center;
    }
    .kawamoto-text{
        justify-content: center;
        text-align: center;
    }
    .kawamoto-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>