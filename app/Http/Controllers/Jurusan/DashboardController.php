<?php

namespace App\Http\Controllers\Jurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('jurusan.dashboard.index');
    }
}
