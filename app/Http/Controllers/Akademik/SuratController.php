<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\E_surat\Surat;
use Str;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function pengajuan()
    {
        $items = Surat::latest('updated_at')->where('status_surat', 0)->get();
        return view('akademik.surat.pengajuan', compact('items'));
    }

    public function ditolak()
    {
        $items = Surat::latest('updated_at')->where('status_surat', 1)->get();
        return view('akademik.surat.ditolak', compact('items'));
    }

     public function terverifikasi()
    {
        $items = Surat::latest('updated_at')->where('status_surat', 2)->get();
        return view('akademik.surat.terverifikasi', compact('items'));
    }

     public function cetak()
    {
        $items = Surat::latest('updated_at')->where('status_surat', 3)->get();
        return view('akademik.surat.cetak', compact('items'));
    }

     public function diteruskan()
    {
        $items = Surat::latest('updated_at')->where('status_surat', 4)->get();
        return view('akademik.surat.diteruskan', compact('items'));
    }
}
