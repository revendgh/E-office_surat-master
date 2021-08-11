<?php

namespace App\Http\Controllers\Warektor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $items = 0;
        return view('warektor.keluar.index', compact('items'));
    }

    public function create()
    {
        $user = User::where('role', 7)->orWhere('role', 8)->orderBy('name')->get();
        return view('warektor.keluar.create', compact('user'));
    }
}
