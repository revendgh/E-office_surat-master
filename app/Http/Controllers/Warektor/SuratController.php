<?php

namespace App\Http\Controllers\Warektor;

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
        $items = Surat::latest('updated_at')->where('status_surat', 9)->get();
        return view('warektor.surat.index', compact('items'));
    }

    public function disetujui()
    {
        $items = Surat::latest('updated_at')->where('status_surat', '>', 9)->get();
        return view('warektor.surat.index', compact('items'));
    }

    public function approveall()
    {
        $items = Surat::where('status_surat', 9)->get();
        foreach ($items as $item) {
            $item->status_surat = 10;
            $item->save();
        }
        return redirect()->route(WAREKTOR. '.surat.index')->withSuccess('Semua permohonan surat berhasil disetujui');
    }

    public function approve($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 10;
        $surat->save();
        return redirect()->route(WAREKTOR. '.surat.index')->withSuccess('Permohonan surat berhasil disetujui');
    }

}
