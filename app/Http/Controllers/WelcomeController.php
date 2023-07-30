<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kontak;
use App\Models\Profil;
use App\Models\Tentang;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $jurusans = Jurusan::all();
        $profils = Profil::all();
        $gurus = Guru::all();
        return view('welcome', compact('jurusans', 'gurus', 'profils'));
    }

    public function tentang()
    {
        $tentangs = Tentang::all();
        $jurusans = Jurusan::all();
        $gurus = Guru::all();
        return view('tentang', compact('jurusans', 'gurus', 'tentangs'));
        // return view('tentang');
    }

    public function jurusan()
    {
        $tentangs = Tentang::all();
        $jurusans = Jurusan::all();
        $gurus = Guru::all();
        return view('jurusan', compact('jurusans', 'gurus', 'tentangs'));
        // return view('tentang');
    }

    public function kontak()
    {
        $jurusans = Jurusan::all();
        $kontaks = Kontak::all();
        $gurus = Guru::all();
        return view('kontak', compact('jurusans', 'gurus', 'kontaks'));
    }
}
