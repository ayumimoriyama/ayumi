@extends('adminlte::page')

@section('title', '島根県ゆるキャラ一覧')

<style>
    .caracter-header-title a {
        display: block;
        margin: 5px;
        font-size: 1.3rem;       
    }

    .caracter-header-title a:hover {
        color: #9D4C06;
        font-size: 2em;/*文字サイズ2倍*/
        font-weight: bold;
    }
    .caracter-header-title {
        display: flex;
        justify-content: space-between;
    }
</style>

@section('content_header')
<div class="caracter-header-title">
    <h1>島根県ゆるキャラ一覧</h1>
    <a href="{{ url('/shimanekko') }}">>>島根県代表！！しまねっこ</a>
</div>
@stop  

@section('content')

<img src="images/shimanemap.png" alt='' useMap="#ShimaneMap" width="860px" id="target">
<map name="ShimaneMap"> 

<!-- <area alt="松江市" coords="" shape="poly" href="https://www.city.matsue.shimane.jp/" target="_blank">

<area alt="安来市" coords="" shape="poly" href="https://www.city.yasugi.shimane.jp/" target="_blank">

<area alt="奥出雲町" coords="" shape="poly" href="https://www.town.okuizumo.shimane.jp/" target="_blank">

<area alt="雲南市" coords="" shape="poly" href="https://www.city.unnan.shimane.jp/unnan/" target="_blank">

<area alt="出雲市" coords="" shape="poly" href="https://www.city.izumo.shimane.jp/www/toppage/0000000000000/APM03000.html" target="_blank">

<area alt="大田市" coords="" shape="poly" href="https://www.city.oda.lg.jp/" target="_blank">

<area alt="飯南町" coords="" shape="poly" href="http://www.iinan.jp/" target="_blank">

<area alt="美郷町" coords="" shape="poly" href="https://www.town.shimane-misato.lg.jp/" target="_blank">

<area alt="川本町" coords="" shape="poly" href="http://www.town.shimane-kawamoto.lg.jp/" target="_blank">

<area alt="邑南町" coords="" shape="poly" href="https://www.town.ohnan.lg.jp/www/index.html" target="_blank">

<area alt="江津市" coords="" shape="poly" href="https://www.city.gotsu.lg.jp/" target="_blank">

<area alt="浜田市" coords="" shape="poly" href="https://www.city.hamada.shimane.jp/www/index.html" target="_blank">

<area alt="益田市" coords="" shape="poly" href="https://www.city.masuda.lg.jp/" target="_blank">

<area alt="津和野町" coords="" shape="poly" href="http://www.town.tsuwano.lg.jp/" target="_blank">

<area alt="吉賀町" coords="" shape="poly" href="https://www.town.yoshika.lg.jp/index.html" target="_blank"> -->

<!-- <area alt="隠岐の島町" coords="" shape="poly" href="https://www.town.okinoshima.shimane.jp/www/index.html" target="_blank">

<area alt="西ノ島町" coords="" shape="poly" href="http://www.town.nishinoshima.shimane.jp/" target="_blank">

<area alt="海士町" coords="" shape="poly" href="http://www.town.ama.shimane.jp/" target="_blank">

<area alt="知夫村" coords="" shape="poly" href="http://www.vill.chibu.lg.jp/" target="_blank"> -->
</map>

@stop

@section('css')
@stop

@section('js')
<script>
// <div id="target">...</div>などの要素にクリックイベントを設定
document.getElementById( "target" ).addEventListener( "click", function( event ) {
	var clickX = event.pageX ;
	var clickY = event.pageY ;

	// 要素の位置を取得
	var clientRect = this.getBoundingClientRect() ;
	var positionX = clientRect.left + window.pageXOffset ;
	var positionY = clientRect.top + window.pageYOffset ;

	// 要素内におけるクリック位置を計算
	var x = clickX - positionX ;
	var y = clickY - positionY ;
    console.log(x);
    console.log(y);
    if(x>661.5 && x<851.5 && y>21.5 && y<116.5){ //松江市
        window.location.href ='http://127.0.0.1:8000/matsue'; 
        return false
    }
    else if(x>709.5 && x<821.5 && y>165.5 && y<210.5){ //安来市
        window.location.href='http://127.0.0.1:8000/yasugi';
        return false
    }
    else if(x>609.5 && x<746.5 && y>236.5 && y<310.5){ //奥出雲町
        window.location.href='http://127.0.0.1:8000/okuizumo';
        return false
    }
    else if(x>600.5 && x<705.5 && y>161.5 && y<198.5){ //雲南市
        window.location.href='http://127.0.0.1:8000/unnan';
        return false
    }
    else if(x>496.5 && x<623.5 && y>50.5 && y<150.5){ //出雲市
        window.location.href='http://127.0.0.1:8000/izumo';
        return false
    }
    else if(x>355.5 && x<493.5 && y>149.5 && y<227.5){ //大田市
        window.location.href='http://127.0.0.1:8000/ohda';
        return false
    }
    else if(x>530.5 && x<589.5 && y>253.5 && y<335.5){ //飯南町
        window.location.href='http://127.0.0.1:8000/iinan';
        return false
    }
    else if(x>455.5 && x<492.5 && y>252.5 && y<342.5){ //美郷町
        window.location.href='http://127.0.0.1:8000/misato';
        return false
    }
    else if(x>405.5 && x<433.5 && y>271.5 && y<311.5){ //川本町
        window.location.href='http://127.0.0.1:8000/kawamoto';
        return false
    }
    else if(x>365.5 && x<475.5 && y>322.5 && y<402.5){ //邑南町
        window.location.href='http://127.0.0.1:8000/ohnan';
        return false
    }
    else if(x>308.5 && x<354.5 && y>235.5 && y<304.5){ //江津市
        window.location.href='http://127.0.0.1:8000/gotsu';
        return false
    }
    else if(x>135.5 && x<266.5 && y>271.5 && y<407.5){ //浜田市
        window.location.href='http://127.0.0.1:8000/hamada';
        return false
    }
    else if(x>31.5 && x<242.5 && y>353.5 && y<436.5){ //益田市
        window.location.href='http://127.0.0.1:8000/masuda';
        return false
    }
    else if(x>6.5 && x<111.5 && y>436.5 && y<499.5){ //津和野町
        window.location.href='http://127.0.0.1:8000/tsuwano';
        return false
    }
    else if(x>30.5 && x<133.5 && y>502.5 && y<604.5){ //吉賀町
        window.location.href='http://127.0.0.1:8000/yoshika';
        return false
    }
    else if(x>234.5 && x<322.5 && y>7.5 && y<108.5){ //隠岐の島町
        window.location.href='http://127.0.0.1:8000/okinoshima';
        return false
    }
    else if(x>114.5 && x<181.5 && y>92.5 && y<125.5){ //西ノ島町
        window.location.href='http://127.0.0.1:8000/nishinoshima';
        return false
    }
    else if(x>165.5 && x<197.5 && y>112.5 && y<150.5){ //海士町
        window.location.href='http://127.0.0.1:8000/ama';
        return false
    }
    else if(x>131.5 && x<147.5 && y>148.5 && y<175.5){ //知夫村
        window.location.href='http://127.0.0.1:8000/chibu';
        return false
    }
} ) ;
</script>
@stop
