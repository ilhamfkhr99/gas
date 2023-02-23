<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Tentang_gas;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Beranda::all();
        return view('welcome', compact('beranda'));
    }
    public function tentang_gas()
    {
        $tentang = Tentang_gas::all();
        return view('tentang_gas', compact('tentang'));
    }
}
