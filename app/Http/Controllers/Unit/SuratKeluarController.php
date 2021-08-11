<?php

namespace App\Http\Controllers\Unit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $items = 0;
        return view('unit.keluar.index', compact('items'));
    }

    public function create()
    {
        $user = User::where('role', 7)->orWhere('role', 8)->orderBy('name')->get();
        return view('unit.keluar.create', compact('user'));
    }
}
