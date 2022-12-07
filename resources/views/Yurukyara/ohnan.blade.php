@extends('adminlte::page')

@section('title', '邑南町')

@section('content_header')
<div class="ohnan-title">
    <h1>邑南町のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="ohnan-text">
    <img src="images/オオナン・ショウ.png" alt='' width="500px">
    <h5>オオナン・ショウ</h5>
    <p class="project-link"><a href="https://www.town.ohnan.lg.jp/www/index.html" target="_blank">邑南町のホームページ</a></p>
</div>

@stop

<style>
    .ohnan-title{
        text-align: center;
    }
    .ohnan-text{
        justify-content: center;
        text-align: center;
    }
    .ohnan-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>