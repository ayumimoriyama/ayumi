@extends('adminlte::page')

@section('title', '島根県ゆるキャラ一覧')

@section('content_header')
    <h1>島根県ゆるキャラ一覧</h1>
@stop  

@section('content')

<img src="images/shimanemap.png" alt='' useMap="#ShimaneMap" width="860px" id="target">
<map name="ShimaneMap"> 

<!-- <area alt="松江市" coords="1027,252,1048,267,1052,279,1063,278,1065,274,1068,274,1069,281,1077,280,1078,276,1084,283,1108,283,1128,292,1120,297,1072,295,1062,300,1051,293,1030,311,1033,324,1032,332,1027,337,1032,345,1040,343,1043,343,1034,361,1033,369,961,395,980,370,934,365,930,356,917,358,916,356,910,352,918,336,992,324,989,317,960,304,934,305,932,281,970,282,967,274,977,272,986,279,997,271,991,278,1006,262,1026,262,1027,252" shape="poly" href="https://www.city.matsue.shimane.jp/" target="_blank">

<area alt="安来市" coords="" shape="poly" href="https://www.city.yasugi.shimane.jp/" target="_blank">

<area alt="奥出雲町" coords="305,92,333,100,333,110,345,114,346,126,335,132,330,145,323,140,311,142,304,132,294,133,285,126,286,124,289,125,290,116,295,116,299,114,299,106,299,103,304,102" shape="poly" href="https://www.town.okuizumo.shimane.jp/" target="_blank">

<area alt="雲南市" coords="326,96,306,93,305,100,298,102,299,113,296,116,290,114,288,123,284,125,275,125,274,122,267,121,267,116,257,117,250,111,249,102,255,101,265,90,276,77,285,74,285,71,291,71,296,58,308,64,328,65" shape="poly" href="https://www.city.unnan.shimane.jp/unnan/" target="_blank">

<area alt="出雲市" coords="272,27,293,23,307,26,307,37,298,38,300,50,290,70,284,69,284,74,276,76,255,102,248,103,244,100,244,94,231,83,230,72,237,72,253,56,258,44,249,34,253,31,263,32,264,34,275,34" shape="poly" href="https://www.city.izumo.shimane.jp/www/toppage/0000000000000/APM03000.html" target="_blank">

<area alt="大田市" coords="231,70,231,83,242,91,243,98,235,103,240,113,237,118,232,115,230,116,228,111,217,106,202,112,199,121,190,126,183,124,177,129,174,124,172,114,166,109,195,85,204,79" shape="poly" href="https://www.city.oda.lg.jp/" target="_blank">

<area alt="飯南町" coords="237,107,244,98,248,102,250,112,257,117,266,116,269,121,275,122,274,128,248,155,237,154,231,146,236,140,244,139,248,132,237,120,241,115,235,104" shape="poly" href="http://www.iinan.jp/" target="_blank">

<area alt="美郷町" coords="216,105,228,110,229,119,235,116,246,130,244,138,240,136,231,144,234,155,224,163,223,160,215,154,212,145,204,131,203,121,202,112" shape="poly" href="https://www.town.shimane-misato.lg.jp/" target="_blank">

<area alt="川本町" coords="199,120,204,134,212,142,208,149,202,144,199,149,196,145,189,145,189,141,177,132,181,125,189,127,192,126" shape="poly" href="http://www.town.shimane-kawamoto.lg.jp/" target="_blank">

<area alt="邑南町" coords="169,141,179,149,195,145,199,149,203,146,208,150,211,146,213,155,220,158,220,163,233,173,232,181,227,181,223,183,217,179,196,186,177,177,165,182,169,164,158,159,154,149,163,147" shape="poly" href="https://www.town.ohnan.lg.jp/www/index.html" target="_blank">

<area alt="江津市" coords="188,145,179,149,169,142,164,148,153,150,145,146,143,139,138,142,133,139,135,133,125,127,144,116,146,118,147,114,164,110,172,118,174,126,177,135,188,142" shape="poly" href="https://www.city.gotsu.lg.jp/" target="_blank">

<area alt="浜田市" coords="125,127,136,132,135,139,140,141,144,138,147,147,155,150,159,161,171,165,165,177,153,176,144,178,141,170,136,171,130,182,108,189,106,184,97,185,83,180,76,179,65,165,98,142,102,144,104,140,103,137" shape="poly" href="https://www.city.hamada.shimane.jp/www/index.html" target="_blank">

<area alt="益田市" coords="65,165,75,180,83,182,84,184,96,188,104,184,114,196,101,213,101,218,81,229,76,235,81,242,81,246,74,242,66,246,65,241,61,240,62,230,53,227,53,221,58,217,56,210,51,208,43,209,31,203,23,208,15,207,16,177,44,178,47,175" shape="poly" href="https://www.city.masuda.lg.jp/" target="_blank">

<area alt="津和野町" coords="16,206,24,207,27,204,35,204,45,212,53,208,57,209,57,216,52,219,53,228,61,230,61,238,53,239,46,238,38,232,31,239,25,238,23,241,8,239,7,231,5,218,7,215" shape="poly" href="http://www.town.tsuwano.lg.jp/" target="_blank">

<area alt="吉賀町" coords="39,233,47,240,51,239,52,242,63,241,65,247,76,245,63,258,64,269,56,272,49,281,44,272,39,275,37,273,34,275,20,273,14,254,24,246" shape="poly" href="https://www.town.yoshika.lg.jp/index.html" target="_blank"> -->

<!-- <area alt="隠岐の島町" coords="130,10,136,3,145,14,148,31,145,42,139,44,141,38,138,41,131,41,136,43,136,50,125,46,121,48,117,45,118,42,107,32,111,25,113,14,126,5" shape="poly" href="https://www.town.okinoshima.shimane.jp/www/index.html" target="_blank">

<area alt="西ノ島町" coords="64,66,62,67,54,57,62,48,68,50,72,45,79,48,85,47,86,50,82,53,75,53,77,60,74,64,68,61,66,55,62,58" shape="poly" href="http://www.town.nishinoshima.shimane.jp/" target="_blank">

<area alt="海士町" coords="86,53,92,57,89,63,81,71,77,71,79,56,82,58" shape="poly" href="http://www.town.ama.shimane.jp/" target="_blank">

<area alt="知夫村" coords="62,70,74,78,70,81,61,75" shape="poly" href="http://www.vill.chibu.lg.jp/" target="_blank"> -->
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
        window.open('https://www.city.matsue.shimane.jp/','_blank'); 
    }
    else if(x>709.5 && x<821.5 && y>165.5 && y<210.5){ //安来市
        window.open('https://www.city.yasugi.shimane.jp/','_blank');
    }
    else if(x>609.5 && x<746.5 && y>236.5 && y<310.5){ //奥出雲町
        window.open('https://www.town.okuizumo.shimane.jp/','_blank');
    }
    else if(x>533.5 && x<705.5 && y>125.5 && y<199.5){ //雲南市
        window.open('https://www.city.unnan.shimane.jp/unnan/','_blank');
    }
    else if(x>496.5 && x<636.5 && y>50.5 && y<124.5){ //出雲市
        window.open('https://www.city.izumo.shimane.jp/www/toppage/0000000000000/APM03000.html','_blank');
    }
    else if(x>355.5 && x<493.5 && y>149.5 && y<227.5){ //大田市
        window.open('https://www.city.oda.lg.jp/','_blank');
    }
    else if(x>530.5 && x<589.5 && y>253.5 && y<335.5){ //飯南町
        window.open('http://www.iinan.jp/','_blank');
    }
    else if(x>455.5 && x<492.5 && y>252.5 && y<342.5){ //美郷町
        window.open('https://www.town.shimane-misato.lg.jp/','_blank');
    }
    else if(x>405.5 && x<433.5 && y>271.5 && y<311.5){ //川本町
        window.open('http://www.town.shimane-kawamoto.lg.jp/','_blank');
    }
    else if(x>365.5 && x<475.5 && y>322.5 && y<402.5){ //邑南町
        window.open('https://www.town.ohnan.lg.jp/www/index.html','_blank');
    }
    else if(x>308.5 && x<354.5 && y>235.5 && y<304.5){ //江津市
        window.open('https://www.city.gotsu.lg.jp/','_blank');
    }
    else if(x>135.5 && x<266.5 && y>271.5 && y<407.5){ //浜田市
        window.open('https://www.city.hamada.shimane.jp/www/index.html','_blank');
    }
    else if(x>31.5 && x<242.5 && y>353.5 && y<436.5){ //益田市
        window.open('https://www.city.masuda.lg.jp/','_blank');
    }
    else if(x>6.5 && x<111.5 && y>436.5 && y<499.5){ //津和野町
        window.open('http://www.town.tsuwano.lg.jp/','_blank');
    }
    else if(x>30.5 && x<133.5 && y>502.5 && y<604.5){ //吉賀町
        window.open('https://www.town.yoshika.lg.jp/index.html','_blank');
    }
    else if(x>234.5 && x<322.5 && y>7.5 && y<108.5){ //隠岐の島町
        window.open('https://www.town.okinoshima.shimane.jp/www/index.html','_blank');
    }
    else if(x>114.5 && x<181.5 && y>92.5 && y<125.5){ //西ノ島町
        window.open('http://www.town.nishinoshima.shimane.jp/','_blank');
    }
    else if(x>165.5 && x<197.5 && y>112.5 && y<150.5){ //海士町
        window.open('http://www.town.ama.shimane.jp/','_blank');
    }
    else if(x>131.5 && x<147.5 && y>148.5 && y<175.5){ //知夫村
        window.open('http://www.vill.chibu.lg.jp/','_blank');
    }
} ) ;
</script>
@stop


