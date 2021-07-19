<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Tendik_akademik;
use App\Models\Tendik_jurusan;
use App\Models\Arsiparis;
use App\Models\Rektor;
use App\Models\Sekretariat;
use App\Models\Unit_kerja;
use App\Models\Wakil_rektor;
use App\Models\Admin;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.users.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, User::rules());

        $data = $request->all();
        $data['password'] = bcrypt(request('password'));
        $user = User::create($data);
        $data['id_users'] = $user->id;
        
        if ($data['role'] == 1) {
            $data['jurusan'] = $data['jurusan_mahasiswa'];
            Mahasiswa::create($data);
        }
        elseif ($data['role'] == 11) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_jurusan'];
            $data['jurusan'] = $data['jurusan_jurusan'];
            Tendik_jurusan::create($data);
        }
        elseif ($data['role'] == 10) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_pegawai'];
            Tendik_akademik::create($data);
        }
        elseif ($data['role'] == 4) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_unit'];
            $data['jabatan'] = $data['jabatan_unit'];
            Unit_kerja::create($data);
        }
        elseif ($data['role'] == 5) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_pegawai'];
            Arsiparis::create($data);
        }
        elseif ($data['role'] == 6) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_pegawai'];
            Sekretariat::create($data);
        }
        elseif ($data['role'] == 7) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_warektor'];
            $data['jabatan'] = $data['jabatan_warektor'];
            Wakil_rektor::create($data);
        }
        elseif ($data['role'] == 8) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_pegawai'];
            Rektor::create($data);
        }
        elseif ($data['role'] == 100) {
            $data['no_induk_pegawai'] = $data['no_induk_pegawai_pegawai'];
            Admin::create($data);
        }

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
        $item = User::findOrFail($id);

        return view('admin.users.edit', compact('item'));
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
        $this->validate($request, User::rules(true, $id));
        $item = User::findOrFail($id);

        $data = $request->all();

        if (request()->has('password') && request('password')) {
            $data['password'] = bcrypt(request('password'));
        }
        else{
            unset($data['password']);
        }

        $item->update($data);

        return redirect()->route(ADMIN . '.users.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
