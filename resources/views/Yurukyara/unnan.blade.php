@extends('adminlte::page')

@section('title', '雲南市')

@section('content_header')
<div class="unnan-title">
    <h1>雲南市のゆるキャラ</h1>
</div>
@stop  

@section('content')
<div class="unnan-text">
    <img src="images/雲南吉田くん.png" alt='' width="300px">
    <h5>雲南吉田くん</h5>
    <p class="project-link"><a href="https://www.city.unnan.shimane.jp/unnan/" target="_blank">雲南市のホームページ</a></p>
</div>

@stop

<style>
    .unnan-title{
        text-align: center;
    }
    .unnan-text{
        justify-content: center;
        text-align: center;
    }
    .unnan-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>