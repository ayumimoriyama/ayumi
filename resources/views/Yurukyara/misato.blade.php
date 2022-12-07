@extends('adminlte::page')

@section('title', '美郷町')

@section('content_header')
<div class="misato-title">
    <h1>美郷町のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="misato-text">
    <img src="images/みさ坊.png" alt='' width="500px">
    <h5>みさ坊</h5>
    <p class="project-link"><a href="https://www.town.shimane-misato.lg.jp/" target="_blank">美郷町のホームページ</a></p>
</div>

@stop

<style>
    .misato-title{
        text-align: center;
    }
    .misato-text{
        justify-content: center;
        text-align: center;
    }
    .misato-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>