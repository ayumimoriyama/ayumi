@extends('adminlte::page')

@section('title', '西ノ島町')

@section('content_header')
<div class="nishinoshima-title">
    <h1>西ノ島町のゆるキャラ</h1>
</div>
@stop  

@section('content')
<div class="nishinoshima-text">
    <img src="images/活イカ活っちゃん.png" alt='' width="350px">
    <h5>活イカ活っちゃん</h5>
    <p class="project-link"><a href="http://www.town.nishinoshima.shimane.jp/" target="_blank">西ノ島町のホームページ</a></p>
</div>

@stop

<style>
    .nishinoshima-title{
        text-align: center;
    }
    .nishinoshima-text{
        justify-content: center;
        text-align: center;
    }
    .nishinoshima-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>