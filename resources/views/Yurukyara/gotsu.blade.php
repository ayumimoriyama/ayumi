@extends('adminlte::page')

@section('title', '江津市')

@section('content_header')
<div class="gotsu-title">
    <h1>江津市のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="gotsu-text">
    <img src="images/人麻呂くんとよさみ姫.png" alt='' width="800px">
    <h5>人麻呂くんとよさみ姫</h5>
    <p class="project-link"><a href="https://www.city.gotsu.lg.jp/" target="_blank">江津市のホームページ</a></p>
</div>

@stop

<style>
    .gotsu-title{
        text-align: center;
    }
    .gotsu-text{
        justify-content: center;
        text-align: center;
    }
    .gotsu-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>