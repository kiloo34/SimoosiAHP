<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function index()
    {
        return view('spk.index', [
            'title'         => 'Rekomendasi',
            'subtitle'      => ' ',
            'createLink'    => route('kriteria.index')
        ]);
    }

    public function kriteria()
    {
        return view('spk.kriteria.index', [
            'title'         => 'Kriteria',
            'subtitle'      => ' ',
            'createLink'    => route('kriteria.create')
        ]);
    }
}
