<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use App\Http\Controllers\Controller;
use App\Models\User;
use Str;
use Storage;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pengaturan::latest('updated_at')->get();

        return view('admin.pengaturan.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('role', 4)->orWhere('role', 7)->orderBy('name')->get();
        return view('admin.pengaturan.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $dokumen = [
            'tanda_tangan', 'stempel',
        ];

        foreach ($dokumen as $x) {
            $this->validate($request,[
                $x => 'max:1000|mimes:png',
            ]);
            $name = Str::random(5).' '.$request->file($x)->getClientOriginalName();
            $file = $request->file($x)->storeAs('ttd_stempel', $name, 'public');
            $data[$x] = $name;
        }

        $data = Pengaturan::create($data);

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pengaturan::findOrFail($id);
        $user = User::where('role', 4)->orWhere('role', 7)->orderBy('name')->get();
        return view('admin.pengaturan.edit', compact('item', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Pengaturan::findOrFail($id);
        $data = $request->all();
        $dokumen = [
            'tanda_tangan', 'stempel',
        ];


        foreach ($dokumen as $x) {
            if ($request->file($x)) {
                $this->validate($request,[
                    $x => 'max:1000|mimes:png',
                ]);

                if (Storage::exists('ttd_stempel/'.$item->$x)) {
                    Storage::delete('ttd_stempel/'.$item->$x);
                }
                $name = Str::random(5).' '.$request->file($x)->getClientOriginalName();
                $file = $request->file($x)->storeAs('ttd_stempel/', $name, 'public');
                $data[$x] = $name;
            }
        }

        $item->update($data);
        return redirect()->route(ADMIN. '.pengaturan.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
