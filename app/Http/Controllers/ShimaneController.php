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

    public function matsue()
    {

        return view('Yurukyara.matsue');
    }

    public function yasugi()
    {

        return view('Yurukyara.yasugi');
    }

    public function okuizumo()
    {

        return view('Yurukyara.okuizumo');
    }

    public function unnan()
    {

        return view('Yurukyara.unnan');
    }

    public function izumo()
    {

        return view('Yurukyara.izumo');
    }

    public function ohda()
    {

        return view('Yurukyara.ohda');
    }

    public function iinan()
    {

        return view('Yurukyara.iinan');
    }

    public function misato()
    {

        return view('Yurukyara.misato');
    }

    public function kawamoto()
    {

        return view('Yurukyara.kawamoto');
    }

    public function ohnan()
    {

        return view('Yurukyara.ohnan');
    }

    public function gotsu()
    {

        return view('Yurukyara.gotsu');
    }

    public function hamada()
    {

        return view('Yurukyara.hamada');
    }

    public function masuda()
    {

        return view('Yurukyara.masuda');
    }

    public function tsuwano()
    {

        return view('Yurukyara.tsuwano');
    }

    public function yoshika()
    {

        return view('Yurukyara.yoshika');
    }

    public function okinoshima()
    {

        return view('Yurukyara.okinoshima');
    }

    public function nishinoshima()
    {

        return view('Yurukyara.nishinoshima');
    }

    public function ama()
    {

        return view('Yurukyara.ama');
    }

    public function chibu()
    {

        return view('Yurukyara.chibu');
    }
}