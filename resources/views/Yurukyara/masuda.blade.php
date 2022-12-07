@extends('adminlte::page')

@section('title', '益田市')

@section('content_header')
<div class="masuda-title">
    <h1>益田市のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="masuda-text">
    <img src="images/オロチくん.png" alt='' width="500px">
    <h5>オロチくん</h5>
    <p class="project-link"><a href="https://www.city.masuda.lg.jp/" target="_blank">益田市のホームページ</a></p>
</div>

@stop

<style>
    .masuda-title{
        text-align: center;
    }
    .masuda-text{
        justify-content: center;
        text-align: center;
    }
    .masuda-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>