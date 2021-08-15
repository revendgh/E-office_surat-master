<?php

namespace App\Http\Controllers\Jurusan;

use App\Http\Controllers\Controller;
use App\Models\E_surat\Surat;
use App\Models\Pengaturan;
use Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;
use Auth;

class SuratController extends Controller
{
    public function index()
    {
        $jurusan = Auth::user()->unit_kerja->unit;
        $items = Surat::where('status_surat', 19)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->get();
        return view('unit.surat.index', compact('items'));
    }

    public function disetujui()
    {
        $jurusan = Auth::user()->unit_kerja->unit;
        $items = Surat::where('status_surat', '>', 19)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->get();
        return view('unit.surat.index', compact('items'));
    }

    public function approveall()
    {
        $jurusan = Auth::user()->unit_kerja->unit;
        $items = Surat::where('status_surat', 19)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->get();
        foreach ($items as $item) {
            $item->status_surat = 20;
            $item->save();
        }
        return redirect()->route(UNIT. '.surat.index')->withSuccess('Semua permohonan surat berhasil disetujui');
    }

    public function approve($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 20;
        $surat->save();
        return redirect()->route(UNIT. '.surat.index')->withSuccess('Permohonan surat berhasil disetujui');
    }

}
