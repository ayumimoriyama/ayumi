@extends('adminlte::page')

@section('title', '飯南町')

@section('content_header')
<div class="iinan-title">
    <h1>飯南町のゆるキャラ</h1>
</div>    
@stop  

@section('content')
<div class="iinan-text">
    <img src="images/い〜にゃん.png" alt='' width="500px">
    <h5>い〜にゃん</h5>
    <p class="project-link"><a href="http://www.iinan.jp/" target="_blank">飯南町のホームページ</a></p>
</div>

@stop

<style>
    .iinan-title{
        text-align: center;
    }
    .iinan-text{
        justify-content: center;
        text-align: center;
    }
    .iinan-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>