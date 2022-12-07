@extends('adminlte::page')

@section('title', '大田市')

@section('content_header')
<div class="ohda-title">
    <h1>大田市のゆるキャラ</h1>
</div> 
@stop  

@section('content')
<div class="ohda-text">
    <img src="images/らとちゃん.png" alt='' width="400px">
    <h5>らとちゃん</h5>
    <p class="project-link"><a href="https://www.city.oda.lg.jp/" target="_blank">大田市のホームページ</a></p>
</div>

@stop

<style>
    .ohda-title{
        text-align: center;
    }
    .ohda-text{
        justify-content: center;
        text-align: center;
    }
    .ohda-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>