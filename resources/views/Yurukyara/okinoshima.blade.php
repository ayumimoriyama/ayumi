@extends('adminlte::page')

@section('title', '隠岐の島町')

@section('content_header')
<div class="okinoshima-title">
    <h1>隠岐の島町</h1>
</div>
@stop  

@section('content')
<div class="okinoshima-text">
    <h7>すみません🙇‍♀️この町にはゆるキャラがいないので代わりに景色を置いときます。</h7>
    <p></p>
    <img src="images/ローソク島.png" alt='' width="800px">
    <h5>ローソク島</h5>
    <p class="project-link"><a href="https://www.town.okinoshima.shimane.jp/www/index.html" target="_blank">隠岐の島町のホームページ</a></p>
</div>

@stop

<style>
    .okinoshima-title{
        text-align: center;
    }
    .okinoshima-text{
        justify-content: center;
        text-align: center;
    }
    .okinoshima-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>