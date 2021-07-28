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
    public function pengajuan()
    {
        $jurusan = Auth::user()->tendik_jurusan->jurusan;
        $items = Surat::where('status_surat', 4)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->get();
        return view('jurusan.surat.pengajuan', compact('items'));
    }

    public function ditolak()
    {
        $jurusan = Auth::user()->tendik_jurusan->jurusan;
        $items = Surat::where('status_surat', 5)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->get();
        return view('jurusan.surat.ditolak', compact('items'));
    }

    public function terverifikasi()
    {
        $jurusan = Auth::user()->tendik_jurusan->jurusan;
        $items = Surat::where('status_surat', 6)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->get();
        return view('jurusan.surat.terverifikasi', compact('items'));
    }

    public function cetak()
    {
        $jurusan = Auth::user()->tendik_jurusan->jurusan;
        $items = Surat::where('status_surat', 7)->whereHas('user.mahasiswa', function($q) use ($jurusan){
            $q->where('jurusan', $jurusan);
        })->get();
        return view('jurusan.surat.cetak', compact('items'));
    }

    public function tolak(Request $request, $id)
    {
        $surat = Surat::findOrFail($id); 
        $surat->status_surat = 5;
        $surat->keterangan_surat=$request->keterangan_surat;
        $surat->save();
        return redirect()->route(JURUSAN. '.surat.ditolak')->withSuccess('Permohonan surat berhasil ditolak');
    }

    public function verifikasi($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 6;
        $surat->save();
        return redirect()->route(JURUSAN. '.surat.show', $surat->id)->withSuccess('Permohonan surat berhasil diverifikasi');
    }

    public function export(Request $request, $id)
    {
        $surat = Surat::findOrFail($id);

        if($surat->status_surat == 6){
            $surat->no_surat = $request->no_surat;
            $surat->status_surat = 7;
            $surat->save();
        }

        if($request->no_surat != $surat->no_surat){
            $surat->no_surat = $request->no_surat;
            $surat->save();
        }

        if ($surat->nama_surat == 'SP-MMTA') {
            $surat->sp_mmta->isi_perjanjian = $request->isi_perjanjian;
            $surat->sp_mmta->save();
        }

        $pejabat = Pengaturan::where('jabatan', 'KETUA JURUSAN '.Auth::user()->tendik_jurusan->jurusan)->first();
        
        $tanggal = Carbon::today()->format('d-m-Y');
        $hari = substr($tanggal,0,2);
        $bulan = substr($tanggal,3,2);
        $tahun = substr($tanggal,6,4);

        $nama = [
            "01" => "Januari",
            "02" => "Februari",
            "03" => "Maret",
            "04" => "April",
            "05" => "Mei",
            "06" => "Juni",
            "07" => "Juli",
            "08" => "Agustus",
            "09" => "September",
            "10" => "Oktober",
            "11" => "November",
            "12" => "Desember",
        ];

        $tanggal = $hari.' '.$nama[$bulan].' '.$tahun;
        if ($surat->nama_surat == 'Surat Rekomendasi Beasiswa') {
            $pdf = PDF::loadview('cetak.surat_rekomendasi_beasiswa',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Rekomendasi Beasiswa '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'Surat Permohonan Data') {
            $pdf = PDF::loadview('cetak.sp_data',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Permohonan Data '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Magang') {
            $pdf = PDF::loadview('cetak.sp_magang',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Pengantar Magang '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'SK Perjalanan') {
            $pdf = PDF::loadview('cetak.surat_perjalanan',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('SK Perjalanan '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'Surat Keterangan Melaksanakan TA') {
            $pdf = PDF::loadview('cetak.sk_ta',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Keterangan Melaksanakan TA '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'Surat Peminjaman') {
            $pdf = PDF::loadview('cetak.surat_peminjaman',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Peminjaman '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'SP-MMTA') {
            $pdf = PDF::loadview('cetak.sp_mmta',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('SP-MMTA '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Proposal KP') {
            $pdf = PDF::loadview('cetak.sp_proposal_kp',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Pengantar Proposal KP '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'Surat Melanjutkan Penelitian') {
            $pdf = PDF::loadview('cetak.surat_penelitian',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Melanjutkan Penelitian '.$surat->user->mahasiswa->nim. '.pdf');
        }
        elseif ($surat->nama_surat == 'Surat Pengantar KP') {
            $pdf = PDF::loadview('cetak.sp_kp',['surat'=>$surat, 'tanggal'=>$tanggal, 'pejabat'=>$pejabat]);
            return $pdf->download('Surat Pengantar KP '.$surat->user->mahasiswa->nim. '.pdf');
        }
    }

    public function show($id)
    {
        $surat = Surat::findOrFail($id);
        if ($surat->nama_surat == 'Surat Rekomendasi Beasiswa') {
            return view('jurusan.surat.suratBeasiswa',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Magang') {
            return view('jurusan.surat.spMagang',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Permohonan Data') {
            return view('jurusan.surat.skData',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar KP') {
            return view('jurusan.surat.spKP',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Proposal KP') {
            return view('jurusan.surat.spProposalKP',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Keterangan Melaksanakan TA') {
            return view('jurusan.surat.skTA',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Perjalanan') {
            return view('jurusan.surat.suratPerjalanan',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Peminjaman') {
            return view('jurusan.surat.suratPeminjaman',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SP-MMTA') {
            return view('jurusan.surat.spMMTA',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Melanjutkan Penelitian') {
            return view('jurusan.surat.suratPenelitian',compact('surat'));
        }
    }
}
