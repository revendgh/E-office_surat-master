<?php

namespace App\Http\Controllers\Unit;

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

        $pengajuan = Surat::where('status_surat', 0)->where('created_at',  'like', '%' . $year . '-%')->count();
        $ditolak = Surat::where('status_surat', 1)->where('created_at',  'like', '%' . $year . '-%')->count();
        $terverifikasi = Surat::where('status_surat', 2)->where('created_at',  'like', '%' . $year . '-%')->count();
        $dicetak = Surat::where('status_surat', 3)->where('created_at',  'like', '%' . $year . '-%')->count();

        $bulan = ['01','02','03','04','05','06','07','08','09','10','11','12'];
        foreach ($bulan as $b) {
            $area[]=Surat::where('created_at',  'like', '%' . $year . '-' . $b . '%')->where('status_surat', '<' , 4)->count();
        }

        $tahun = array();
            $tahun[0] = date('Y')-2;
            $tahun[1] = date('Y')-1;
            $tahun[2] = date('Y');
            $tahun[3] = date('Y')+1;
            $tahun[4] = date('Y')+2;

        foreach($tahun as $t) {
            $area2[]=Surat::where('created_at',  'like', '%' . $t . '-' . '%')->where('status_surat', '<' , 4)->count();
        }

        $label = array();
            $label[0] = 'SK Aktif Organisasi';
            $label[1] = 'SK Aktif Studi';
            $label[2] = 'SK Lulus';
            $label[3] = 'SK Pengganti KTM';
            $label[4] = 'SK Pernah Studi';
        
        $hari = Carbon::now()->format('Y-m-d');
        foreach($label as $l){
            $pie[]=Surat::where('created_at',  'like', '%' . $hari . '%')->where('nama_surat', $l)->count();
        }

        $color = ['#30a5ff', '#ffb53e', '#1ebfae', '#f9243f', '#7715bd'];
        $highlight = ['#62b9fb', '#fac878', '#3cdfce', '#f6495f', '#b64fff'];

        return view('unit.dashboard.index', compact('year', 'pengajuan', 'ditolak', 'terverifikasi', 'dicetak', 'bulan', 'area', 'tahun', 'area2', 'label', 'pie', 'color', 'highlight'));
    }
}
