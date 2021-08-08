<?php

namespace App\Http\Controllers\Rektor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SuratMasukController extends Controller
{
    public function index()
    {
        $items = 0;
        return view('rektor.masuk.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('role', 4)->orWhere('role', 5)->orWhere('role', 6)->orWhere('role', 7)->orWhere('role', 8)->orderBy('name')->get();
        return view('rektor.masuk.create', compact('user'));
    }
}
