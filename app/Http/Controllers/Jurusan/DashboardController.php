<?php

namespace App\Http\Controllers\Jurusan;

use App\Http\Controllers\Controller;
use App\Models\E_surat\Surat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $year = Carbon::now()->year;
        $jurusan = Auth::user()->tendik_jurusan->jurusan;

        $pengajuan = Surat::where('status_surat', 4)->where('created_at',  'like', '%' . $year . '-%')->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->count();
        $ditolak = Surat::where('status_surat', 5)->where('created_at',  'like', '%' . $year . '-%')->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->count();
        $terverifikasi = Surat::where('status_surat', 6)->where('created_at',  'like', '%' . $year . '-%')->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->count();
        $dicetak = Surat::where('status_surat', 7)->where('created_at',  'like', '%' . $year . '-%')->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->count();

        $bulan = ['01','02','03','04','05','06','07','08','09','10','11','12'];
        foreach ($bulan as $b) {
            $area[]=Surat::where('created_at',  'like', '%' . $year . '-' . $b . '%')->where('status_surat', '>' , 3)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->count();
        }

        $tahun = array();
            $tahun[0] = date('Y')-2;
            $tahun[1] = date('Y')-1;
            $tahun[2] = date('Y');
            $tahun[3] = date('Y')+1;
            $tahun[4] = date('Y')+2;

        foreach($tahun as $t) {
            $area2[]=Surat::where('created_at',  'like', '%' . $t . '-' . '%')->where('status_surat', '>' , 3)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->count();
        }

        $label = array();
            $label[0] = 'Surat Rekomendasi Beasiswa';
            $label[1] = 'Surat Permohonan Data';
            $label[2] = 'Surat Pengantar Magang';
            $label[3] = 'SK Perjalanan';
            $label[4] = 'Surat Keterangan Melaksanakan TA';
            $label[5] = 'Surat Peminjaman';
            $label[6] = 'SP-MMTA';
            $label[7] = 'Surat Pengantar Proposal KP';
            $label[8] = 'Surat Melanjutkan Penelitian';
            $label[9] = 'Surat Pengantar KP';
        
        $hari = Carbon::now()->format('Y-m-d');
        foreach($label as $l){
            $pie[]=Surat::where('created_at',  'like', '%' . $hari . '%')->where('nama_surat', $l)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->count();
        }
        var_dump ($pie);
        die();

        $color = ['#e6194b', '#3cb44b', '#ffe119', '#4363d8', '#f58231', '#911eb4', '#46f0f0', '#f032e6', '#bcf60c', '#fabebe'];
        $highlight = ['#62b9fb', '#fac878', '#3cdfce', '#f6495f', '#b64fff'];

        return view('jurusan.dashboard.index', compact('year', 'pengajuan', 'ditolak', 'terverifikasi', 'dicetak', 'bulan', 'area', 'tahun', 'area2', 'label', 'pie', 'color', 'highlight'));
    }
}
