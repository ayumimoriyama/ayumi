@extends('adminlte::page')

@section('title', '吉賀町')

@section('content_header')
<div class="yoshika-title">
    <h1>吉賀町のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="yoshika-text">
    <img src="images/ごんごんじい.png" alt='' width="350px">
    <h5>ごんごんじい</h5>
    <p class="project-link"><a href="https://www.town.yoshika.lg.jp/index.html" target="_blank">吉賀町のホームページ</a></p>
</div>

@stop

<style>
    .yoshika-title{
        text-align: center;
    }
    .yoshika-text{
        justify-content: center;
        text-align: center;
    }
    .yoshika-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>