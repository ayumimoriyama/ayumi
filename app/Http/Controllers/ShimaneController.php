<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShimaneController extends Controller
    {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shimane()
    {

        return view('Yurukyara.shimane');
    
    }

    //しまねっこ
    public function shimanekko()
    {

        return view('Yurukyara.shimanekko');
    }

    //松江市
    public function matsue()
    {

        return view('Yurukyara.matsue');
    }

    //安来市
    public function yasugi()
    {

        return view('Yurukyara.yasugi');
    }

    //奥出雲町
    public function okuizumo()
    {

        return view('Yurukyara.okuizumo');
    }

    //雲南市
    public function unnan()
    {

        return view('Yurukyara.unnan');
    }

    //出雲市
    public function izumo()
    {

        return view('Yurukyara.izumo');
    }

    //大田市
    public function ohda()
    {

        return view('Yurukyara.ohda');
    }

    //飯南町
    public function iinan()
    {

        return view('Yurukyara.iinan');
    }

    //美郷町
    public function misato()
    {

        return view('Yurukyara.misato');
    }

    //川本町
    public function kawamoto()
    {

        return view('Yurukyara.kawamoto');
    }

    //邑南町
    public function ohnan()
    {

        return view('Yurukyara.ohnan');
    }

    //江津市
    public function gotsu()
    {

        return view('Yurukyara.gotsu');
    }

    //浜田市
    public function hamada()
    {

        return view('Yurukyara.hamada');
    }

    //益田市
    public function masuda()
    {

        return view('Yurukyara.masuda');
    }

    //津和野町
    public function tsuwano()
    {

        return view('Yurukyara.tsuwano');
    }

    //吉賀町
    public function yoshika()
    {

        return view('Yurukyara.yoshika');
    }

    //隠岐の島町
    public function okinoshima()
    {

        return view('Yurukyara.okinoshima');
    }

    //西ノ島町
    public function nishinoshima()
    {

        return view('Yurukyara.nishinoshima');
    }

    //海士町
    public function ama()
    {

        return view('Yurukyara.ama');
    }

    //知夫村
    public function chibu()
    {

        return view('Yurukyara.chibu');
    }
}