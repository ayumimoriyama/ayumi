@extends('adminlte::page')

@section('title', '海士町')

@section('content_header')
<div class="ama-title">
    <h1>海士町</h1>
</div>
@stop  

@section('content')
<div class="ama-text">
    <h7>すみません🙇‍♀️この町にはゆるキャラがいないので代わりに景色を置いときます。</h7>
    <p></p>
    <img src="images/海士町の景色.png" alt='' width="700px">
    <h5>海士町の上空写真</h5>
    <p class="project-link"><a href="http://www.town.ama.shimane.jp/" target="_blank">海士町のホームページ</a></p>
</div>

@stop

<style>
    .ama-title{
        text-align: center;
    }
    .ama-text{
        justify-content: center;
        text-align: center;
    }
    .ama-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>