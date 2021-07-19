<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\E_surat\Surat;
use Auth;

class StatusController extends Controller
{
    public function index()
    {
        $items = Surat::latest('updated_at')->where('id_users', Auth::user()->id)->get();
        return view('mahasiswa.status.index', compact('items'));
    }
}
