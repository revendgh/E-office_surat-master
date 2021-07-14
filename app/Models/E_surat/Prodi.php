<?php

namespace App\Models\E_surat;

use Illuminate\Database\Eloquent\Model;


class Prodi extends Model
{
    protected $table = 'prodi';
    protected $fillable = ['nama_prodi'];
    
    public function jurusan() {
        return $this->belongsTo('App\Models\E_surat\Jurusan', 'id_jurusan');
    }
    public function mahasiswa() {
        return $this->hasMany('App\Models\E_surat\Mahasiswa');
    }   
}
