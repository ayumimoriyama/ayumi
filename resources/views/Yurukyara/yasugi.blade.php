@extends('adminlte::page')

@section('title', '安来市')

@section('content_header')
<div class="yasugi-title">
    <h1>安来市のゆるキャラ</h1>
</div>
@stop  

@section('content')
<div class="yasugi-text">
    <img src="images/あらエッサくん.png" alt='' width="400px">
    <h5>あらエッサくん</h5>
    <p class="project-link"><a href="https://www.city.yasugi.shimane.jp/" target="_blank">安来市のホームページ</a></p>
</div>

@stop

<style>
    .yasugi-title{
        text-align: center;
    }
    .yasugi-text{
        justify-content: center;
        text-align: center;
    }
    .yasugi-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>