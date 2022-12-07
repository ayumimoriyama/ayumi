@extends('adminlte::page')

@section('title', '奥出雲町')

@section('content_header')
<div class="okuizumo-title">
    <h1>奥出雲町のゆるキャラ</h1>
</div>
@stop  

@section('content')
<div class="okuizumo-text">
    <img src="images/すさのおくんといなたひめちゃん.png" alt='' width="800px">
    <h5>すさのおくんといなたひめちゃん</h5>
    <p class="project-link"><a href="https://www.town.okuizumo.shimane.jp/" target="_blank">奥出雲町のホームページ</a></p>
</div>
@stop

<style>
    .okuizumo-title{
        text-align: center;
    }
    .okuizumo-text{
        justify-content: center;
        text-align: center;
    }
    .okuizumo-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>