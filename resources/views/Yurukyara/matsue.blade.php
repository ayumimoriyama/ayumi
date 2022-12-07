@extends('adminlte::page')

@section('title', '松江市')

@section('content_header')
<div class="matsue-title">
    <h1>松江市のゆるキャラ</h1>
</div>
@stop  

@section('content')
<div class="matsue-text">
    <img src="images/あっぱれくんとしじみ姫.png" alt='' width="500px">
    <h5>あっぱれくんとしじみ姫</h5>
    <p class="project-link"><a href="https://www.city.matsue.shimane.jp/" target="_blank">松江市のホームページ</a></p>
</div>

@stop

<style>
    .matsue-title{
        text-align: center;
    }
    .matsue-text{
        justify-content: center;
        text-align: center;
    }
    .matsue-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>