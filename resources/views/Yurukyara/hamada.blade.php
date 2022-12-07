@extends('adminlte::page')

@section('title', '浜田市')

@section('content_header')
<div class="hamada-title">
    <h1>浜田市のゆるキャラ</h1>
</div>
@stop  

@section('content')
<div class="hamada-text">
    <img src="images/なみちゃん.png" alt='' width="500px">
    <h5>なみちゃん</h5>
    <p class="project-link"><a href="https://www.city.hamada.shimane.jp/www/index.html" target="_blank">浜田市のホームページ</a></p>
</div>

@stop

<style>
    .hamada-title{
        text-align: center;
    }
    .hamada-text{
        justify-content: center;
        text-align: center;
    }
    .hamada-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>