<?php

namespace App\Http\Controllers\Arsiparis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuAgendaController extends Controller
{
    public function index()
    {
        $items = 0;
        return view('arsiparis.agenda.index', compact('items'));
    }
}
