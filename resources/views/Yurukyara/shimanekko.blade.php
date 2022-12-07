@extends('adminlte::page')

@section('title', 'しまねっこ')

@section('content_header')
<div class="shimanekko-title">
    <h1>しまねっこ</h1>
</div>
@stop  

@section('content')
<div class="shimanekko-text">
    <img src="images/しまねっこ2.png" alt='' width="450px">
    <p class="project-link"><a href="https://www.kankou-shimane.com/shimanekko/" target="_blank">しまねっこの部屋</a></p>
</div>

@stop

<style>
    .shimanekko-title{
        text-align: center;
    }
    .shimanekko-text{
        justify-content: center;
        text-align: center;
    }
    .shimanekko-text p{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>