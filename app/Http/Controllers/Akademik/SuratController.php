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

    public function tolak(Request $request, $id)
    {
        $surat = Surat::findOrFail($id); 
        $surat->status_surat = 1;
        $surat->keterangan_surat=$request->keterangan_surat;
        $surat->save();
        return redirect()->route(AKADEMIK. '.surat.ditolak')->withSuccess('Permohonan surat berhasil ditolak');
    }

    public function verifikasi($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 2;
        $surat->save();
        return redirect()->route(AKADEMIK. '.surat.show', $surat->id)->withSuccess('Permohonan surat berhasil diverifikasi');
    }

    public function teruskan($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 4;
        $surat->save();
        return redirect()->route(AKADEMIK. '.surat.diteruskan')->withSuccess('Permohonan surat berhasil diteruskan kejurusan');
    }

    public function export(Request $request, $id)
    {
        $surat = Surat::findOrFail($id);
        if($surat->no_surat == null){
            $surat->no_surat = $request->no_surat;
            $surat->status_surat = 3;
            $surat->save();
        }
        
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
        if ($surat->nama_surat == 'SK Aktif Studi') {
            $pdf = PDF::loadview('cetak.sk_aktif_studi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Aktif Organisasi') {
            $pdf = PDF::loadview('cetak.sk_aktif_organisasi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Pernah Studi') {
            $pdf = PDF::loadview('cetak.sk_pernah_studi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Lulus') {
            $pdf = PDF::loadview('cetak.sk_lulus',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Pengganti KTM') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        return $pdf->download('surat-pdf');
    }

    public function show($id)
    {
        $surat = Surat::findOrFail($id);
        if ($surat->nama_surat == 'SK Aktif Studi') {
            return view('akademik.surat.skAktifStudi',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Aktif Organisasi') {
            return view('akademik.surat.skAktifOrganisasi',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Lulus') {
            return view('akademik.surat.skLulus',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Pengganti KTM') {
            return view('akademik.surat.skKTM',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Pernah Studi') {
            return view('akademik.surat.skStudi',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Rekomendasi Beasiswa') {
            return view('akademik.surat.suratBeasiswa',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Magang') {
            return view('akademik.surat.spMagang',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Permohonan Data') {
            return view('akademik.surat.skData',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar KP') {
            return view('akademik.surat.spKP',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Proposal KP') {
            return view('akademik.surat.spProposalKP',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Keterangan Melaksanakan TA') {
            return view('akademik.surat.skTA',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Perjalanan') {
            return view('akademik.surat.suratPerjalanan',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Peminjaman') {
            return view('akademik.surat.suratPeminjaman',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SP-MMTA') {
            return view('akademik.surat.spMMTA',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Melanjutkan Penelitian') {
            return view('akademik.surat.suratPenelitian',compact('surat'));
        }
    }
}
