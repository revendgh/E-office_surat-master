<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\E_surat\Surat;
use App\Models\E_surat\Sk_aktif_organisasi;
use App\Models\E_surat\Sk_aktif_studi;
use App\Models\E_surat\Sk_data;
use App\Models\E_surat\Sk_lulus;
use App\Models\E_surat\Sk_pengganti_ktm;
use App\Models\E_surat\Sk_pernah_studi;
use App\Models\E_surat\Sk_ta;
use App\Models\E_surat\Sp_KP;
use App\Models\E_surat\Sp_magang;
use App\Models\E_surat\Sp_mmta;
use App\Models\E_surat\Sp_proposalKP;
use App\Models\E_surat\Surat_peminjaman;
use App\Models\E_surat\Surat_penelitian;
use App\Models\E_surat\Surat_perjalanan;
use App\Models\E_surat\Surat_rekomendasi_beasiswa;
use Str;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        return view('mahasiswa.surat.index');
    }

    public function sk_aktif_studi_create()
    {
        return view('mahasiswa.surat.skAktifStudi');
    }

    public function sk_aktif_organisasi_create()
    {
        return view('mahasiswa.surat.skAktifOrganisasi');
    }

    public function sk_pernah_studi_create()
    {
        return view('mahasiswa.surat.skStudi');
    }

    public function sk_pengganti_ktm_create()
    {
        return view('mahasiswa.surat.skKTM');
    }
     
    public function sk_lulus_create()
    {
        return view('mahasiswa.surat.skLulus');
    }

    public function sk_data_create()
    {
        return view('mahasiswa.surat.skData');
    }
    
    public function surat_rekomendasi_beasiswa_create()
    {
        return view('mahasiswa.surat.suratBeasiswa');
    }

    public function sp_magang_create()
    {
        return view('mahasiswa.surat.spMagang');
    }

    public function surat_perjalanan_create()
    {
        return view('mahasiswa.surat.suratPerjalanan');
    }

    public function sk_ta_create()
    {
        return view('mahasiswa.surat.skTA');
    }

    public function surat_peminjaman_create()
    {
        return view('mahasiswa.surat.suratPeminjaman');
    }

    public function sp_mmta_create()
    {
        return view('mahasiswa.surat.spMMTA');
    }

    public function sp_proposalKP_create()
    {
        return view('mahasiswa.surat.spProposalKP');
    }

    public function sp_kp_create()
    {
        return view('mahasiswa.surat.spKP');
    }

    public function surat_penelitian_create()
    {
        return view('mahasiswa.surat.suratPenelitian');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sk_aktif_studi_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_aktif_studi::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sk_aktif_organisasi_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_aktif_organisasi::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sk_pernah_studi_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_pernah_studi::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sk_pengganti_ktm_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_pengganti_ktm::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sk_lulus_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_lulus::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sk_data_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_data::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function surat_rekomendasi_beasiswa_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Surat_rekomendasi_beasiswa::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sp_magang_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sp_magang::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function surat_perjalanan_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Surat_perjalanan::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sk_ta_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_ta::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function surat_peminjaman_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Surat_peminjaman::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sp_mmta_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sp_mmta::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sp_proposalKP_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sp_proposalKP::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sp_kp_store(Request $request)
    {
        $data = $request->all();
        $this->validate($request,[
            'surat_balasan' => 'max:2000|mimes:pdf',
        ]);
        
        $surat = Surat::create($data);
        $name = Str::random(5).' '.$request->file('surat_balasan')->getClientOriginalName();
        $file = $request->file('surat_balasan')->storeAs('KP/', $name, 'public');
        $data['surat_balasan'] = $name;

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sp_KP::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function surat_penelitian_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Surat_penelitian::create($data);
        return redirect()->route(MAHASISWA. '.surat.index')->withSuccess('Permohonan surat berhasil dibuat');
    }
}
