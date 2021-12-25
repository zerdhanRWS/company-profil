<?php

namespace App\Http\Controllers;

use App\Models\galery;
use App\Models\Hero;
use App\Models\portofolio;
use App\Models\Profil;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {

        $hero = Hero::all();
        $profil = Profil::all();
        $portofolio = portofolio::all();
        $blog = portofolio::all();
        $galery = galery::all();
        return view('index', [
            'hero' => $hero,
            'profil' => $profil,
            'portofolio' => $portofolio,
            'blog' => $blog,
            'galery' => $galery
        ]);
    }
}
