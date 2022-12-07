@extends('adminlte::page')

@section('title', '知夫村')

@section('content_header')
<div class="chibu-title">
    <h1>知夫村</h1>
</div>
@stop  

@section('content')
<div class="chibu-text">
    <h7>すみません🙇‍♀️この村にはゆるキャラがいないので代わりに景色を置いときます。</h7>
    <p></p>
    <img src="images/赤壁.png" alt='' width="650px">
    <h5>赤壁</h5>
    <p class="project-link"><a href="http://www.vill.chibu.lg.jp/" target="_blank">知夫村のホームページ</a></p>
</div>

@stop

<style>
    .chibu-title{
        text-align: center;
    }
    .chibu-text{
        justify-content: center;
        text-align: center;
    }
    .chibu-text h5{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }
</style>