@extends('adminlte::page')

@section('title', '出雲市')

@section('content_header')
<div class="izumo-title">
    <h1>出雲市のゆるキャラ</h1>
</div>
@stop  

@section('content')
<div class="izumo-text">
    <img src="images/やがみちゃん.png" alt='' width="300px">
    <h5>やがみちゃん(斐川町)</h5>
    <p></p>
    <img src="images/おんすうふらたろう.png" alt='' width="500px">
    <h5>おんすうふらたろう(平田町)</h5>
    <p class="project-link"><a href="https://www.city.izumo.shimane.jp/www/toppage/0000000000000/APM03000.html" target="_blank">出雲市のホームページ</a></p>
</div>

@stop

<style>
    .izumo-title{
        text-align: center;
    }
    .izumo-text{
        justify-content: center;
        text-align: center;
    }
    .izumo-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>