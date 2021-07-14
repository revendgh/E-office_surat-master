<?php

namespace App\Models\E_surat;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $fillable = ['nama_jurusan'];
    
    public function prodi() {
       return $this->hasMany('App\Models\E_surat\Prodi', 'id_jurusan');
       }   
}
