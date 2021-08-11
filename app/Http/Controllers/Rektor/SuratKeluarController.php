<?php

namespace App\Http\Controllers\Rektor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $items = 0;
        return view('rektor.keluar.index', compact('items'));
    }

    public function create()
    {
        $user = User::where('role', 7)->orWhere('role', 8)->orderBy('name')->get();
        return view('rektor.keluar.create', compact('user'));
    }
}